<?php

namespace App\Http\Controllers;

use App\Enums\FolderPaths;
use App\Models\data;
use App\Models\family;
use App\Models\LeadDataCounteroffered;
use App\Models\LeadDataFahrzeug;
use App\Models\LeadDataKK;
use App\Models\LeadDataPrevention;
use App\Models\LeadDataThings;
use App\Models\Pendency;
use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admins;
use App\Models\newgegen;
use App\Models\newnue;
use App\Notifications\SendNotificationn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Svg\Tag\Rect;

class LeadDataController extends Controller
{
    use FileManagerTrait;
    public function acceptdata($id, $accept = false,Request $req)
    {
        $id = Crypt::decrypt($id) / 1244;
        $admin_id = $req->admin_id;

        $admin_id = Crypt::decrypt($req->admin_id) / 1244;

        if (!Auth::user()->hasRole('fs') || Pendency::find(Session::get('pend_id'))->admin_id == Auth::user()->id) {
            if (!$accept) {
                $data = new data();
                $lead = family::find($id);
                $data->getdata($id);


                if(LeadDataFahrzeug::where('person_id',$id)->first()){
                               $mandatiert = LeadDataFahrzeug::where('person_id',$id)->first()->mandatiert != null ? true : false;

                }
                else{
                    $mandatiert = false;
                }
               $mandatiert ? $mandatierturl = LeadDataFahrzeug::where('person_id',$id)->first()->mandatiert : $mandatierturl = "";


                return view('updatedocument')->with('data',$data)->with('lead',$lead)->with('admin_id',$admin_id)->with('mandatiert',$mandatiert)->with('mandatierturl',$mandatierturl)->with('id',$id);


            } else {
                if (Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) {
                    $pend = Pendency::find(Session::get('pend_id'));
                $pend->completed = 1;
                $pend->type = 'Eingereicht';
                $pend->save();
                $person = family::find($pend->family_id);
                $person->status = "Done";
                $person->save();
                return redirect()->route('acceptdata', ['id' => Crypt::encrypt($id * 1244),'admin_id' => Crypt::encrypt($admin_id * 1244)]);
                }
                else{
                    return redirect()->back();
                }
            }
    }
}
public function rejectupdate(Request $req){
 $pend = Pendency::find(Session::get('pend_id'));
$pend->done = 0;
$pend->completed = 0;
$pend->save();
return redirect()->route('tasks');
}

    public function createLeadDataKK($leadIdd, $personIdd, Request $request, $pendency = false)
    {
        $offer = 0;
        $leadId = Crypt::decrypt($leadIdd);
        $leadId /= 1244;
        $personId = Crypt::decrypt($personIdd);
        $personId /= 1244;
        $newgcount = (int) $request->input('newgcount');
        $newncount = (int) $request->input('newncount');
        $request->hasFile('offer') ? $offer++ : $offer += 0;

        $person = family::find($personId);
        $del = LeadDataKK::where('person_id',$personId)->first();
        if($del){
            $del->delete();
        }
        if ($person->lead->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('salesmanager') || Pendency::where('family_id', $personId)->first()->admin_id == Auth::user()->id) {
            LeadDataKK::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'pre_insurer' => $request->pre_insurer ? $this->storeFile($request->file('pre_insurer'), FolderPaths::KK_FILES) : null,
                'id_required' => $request->id_required ? $this->storeFile($request->file('id_required'), FolderPaths::KK_FILES) : null,
                'notice_by' => $request->notice_by ? $this->storeFile($request->file('notice_by'), FolderPaths::KK_FILES) : null,
                'power_of_attorney' => $request->power_of_attorney ? $this->storeFile($request->file('power_of_attorney'), FolderPaths::KK_FILES) : null,
                'vorversicherer_select' => filter_var($request->vorversicherer_select,FILTER_SANITIZE_STRING),
                'id_notwending_select' => filter_var($request->id_notwending_select,FILTER_SANITIZE_STRING),
                'kundingung_durch_select' => filter_var($request->kundingung_durch_select,FILTER_SANITIZE_STRING),
                'vollmacht_select' => filter_var($request->vollmacht_select,FILTER_SANITIZE_STRING)
            ]);
            $del = LeadDataCounteroffered::where('person_id',$personId)->first();
            if($del){
                $del->delete();
            }
            LeadDataCounteroffered::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_police ? $this->storeFile($request->input('upload_police'), FolderPaths::KK_FILES) : null,
                'comparison_type' => filter_var($request->comparison_type,FILTER_SANITIZE_STRING),
                'comment' => filter_var($request->commentFILTER_SANITIZE_STRING)
            ]);
            $del = LeadDataFahrzeug::where('person_id',$personId)->first();
            if($del){
                $del->delete();
            }
            LeadDataFahrzeug::create([
                'nuekommentar' => filter_var($request->nuekommentar,FILTER_SANITIZE_STRING),
                'mandatiert' => $request->mandatiert ? $this->storeFile($request->file('mandatiert'), FolderPaths::KK_FILES) : null,
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_policeFahrzeug ? $this->storeFile($request->file('upload_policeFahrzeug'), FolderPaths::KK_FILES) : null,
                'vehicle_id' => filter_var($request->vehicle_id,FILTER_SANITIZE_STRING),
                'leasing' => filter_var($request->leasing,FILTER_SANITIZE_STRING),
                'leasing_name' => filter_var($request->leasing_name,FILTER_SANITIZE_STRING),
                'year_of_purchase' => filter_var($request->year_of_purchase,FILTER_SANITIZE_STRING),
                'placing_on_the_market' => filter_var($request->placing_on_the_market,FILTER_SANITIZE_STRING),
                'insurance_date' => $request->insurance_date,
                'redeemed' => filter_var($request->redeemed,FILTER_SANITIZE_STRING),
                'km_stood' => filter_var($request->km_stood,FILTER_SANITIZE_STRING),
                'issue_date' => filter_var($request->issue_date,FILTER_SANITIZE_STRING),
                'nationality' => filter_var($request->nationality,FILTER_SANITIZE_STRING),
                'most_common' => filter_var($request->most_common,FILTER_SANITIZE_STRING),
                'insurance' => filter_var($request->insurance,FILTER_SANITIZE_STRING),
                'deductible' => filter_var($request->deductible,FILTER_SANITIZE_STRING),
                'carried' => filter_var($request->carried,FILTER_SANITIZE_STRING),
                'repair_shop' => filter_var($request->repair_shop,FILTER_SANITIZE_STRING),
                'accident_coverage' => filter_var($request->accident_coverage,FILTER_SANITIZE_STRING),
                'traffic_legal_protection' => filter_var($request->traffic_legal_protection,FILTER_SANITIZE_STRING),
                'grossly' => filter_var($request->grossly,FILTER_SANITIZE_STRING),
                'glass_protection' => filter_var($request->glass_protection,FILTER_SANITIZE_STRING),
                'parking_damage' => filter_var($request->parking_damage,FILTER_SANITIZE_STRING),
                'hour_breakdown_assistance' => filter_var($request->hour_breakdown_assistance,FILTER_SANITIZE_STRING),
                'comment' => filter_var($request->commentFahrenzug,FILTER_SANITIZE_STRING),
                'first_intro' => filter_var($request->first_intro,FILTER_SANITIZE_STRING),
                'offer' => $request->hasFile('offer') ? $this->storeFile($request->file('offer'),FolderPaths::KK_FILES) : null,
                'vergleichsart_select' => $request->vergleichsart_select
            ]);
            $del = LeadDataThings::where('person_id',$personId)->first();
            if($del){
                $del->delete();
            }
            LeadDataThings::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'nationality' => filter_var($request->nationality_sachen,FILTER_SANITIZE_STRING),
                'residence_permit' => filter_var($request->residence_permit,FILTER_SANITIZE_STRING),
                'telephone_nr' => filter_var($request->telephone_nr,FILTER_SANITIZE_STRING),
                'email' => filter_var($request->email,FILTER_SANITIZE_STRING),
                'zivilstand' => filter_var($request->zivilstand,FILTER_SANITIZE_STRING),
                'employment_relationship' => filter_var($request->employment_relationship,FILTER_SANITIZE_STRING),
                'job' => filter_var($request->job,FILTER_SANITIZE_STRING),
                'payment_frequency' => filter_var($request->payment_frequency,FILTER_SANITIZE_STRING),
                'amount_per_month' => filter_var($request->amount_per_month,FILTER_SANITIZE_STRING),
                'share_guarantee' => filter_var($request->share_guarantee,FILTER_SANITIZE_STRING),
                'start_of_contract' => filter_var($request->start_of_contract,FILTER_SANITIZE_STRING),
                'premium_exemption' => filter_var($request->premium_exemption,FILTER_SANITIZE_STRING),
                'eu_pension' => filter_var($request->eu_pension,FILTER_SANITIZE_STRING),
                'death_benefit' => filter_var($request->death_benefit,FILTER_SANITIZE_STRING),
                'smoker' => filter_var($request->smoker,FILTER_SANITIZE_STRING),
                'desired' => filter_var($request->desired,FILTER_SANITIZE_STRING),
            ]);
            $del = LeadDataPrevention::where('person_id',$personId)->first();
            if($del){
                $del->delete();
            }
            LeadDataPrevention::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_police__ ? $this->storeFile($request->file('upload_police__'), FolderPaths::KK_FILES) : null,
                'comparison_type' => filter_var($request->comparison_type,FILTER_SANITIZE_STRING),
                'comment' => filter_var($request->comment__,FILTER_SANITIZE_STRING),
                'offer' => $request->offersach ? $this->storeFile($request->file('offersach'), FolderPaths::KK_FILES) : null,
                'number_of_people' => $request->number_of_people,
                'number_of_rooms' => $request->number_of_rooms,
                'sum_insured' => filter_var($request->sum_insured,FILTER_SANITIZE_STRING),
                'desired_additional_coverage' => filter_var($request->desired_additional_coverage,FILTER_SANITIZE_STRING),
                'personal_liability' => filter_var($request->personal_liability,FILTER_SANITIZE_STRING),
                'society' => filter_var($request->society,FILTER_SANITIZE_STRING),
                'n_of_p_legal_protection' => filter_var($request->n_of_p_legal_protection,FILTER_SANITIZE_STRING),
                'Hvergleichsart_select' => filter_var($request->Hvergleichsart_select,FILTER_SANITIZE_STRING),
            ]);
            $family = family::where('id', $personId)->first();
            $status = ['status' => 'Submited'];
            $family->update($status);


for($i = 1; $i <= $newgcount; $i++){
    $file = $request->file('upload_policeFahrzeug' . $i);
    $request->hasFile('offer' . $i) ? $offer++ : $offer += 0;
newgegen::create([
    'comparison_type' => $request->input('comparison_type' . $i) ? filter_var($request->input('comparison_type' . $i),FILTER_SANITIZE_STRING) : null,
    'upload_policeFahrzeug' => $request->hasFile('upload_policeFahrzeug' . $i) ? $this->storeFile($file, FolderPaths::KK_FILES) : null,
    'commentFahrenzug' => $request->input('commentFahrenzug' . $i) ? filter_var($request->input('commentFahrenzug' . $i),FILTER_SANITIZE_STRING) : "",
    'offer' => $request->file('offer'. $i) ? $this->storeFile($request->file('offer' . $i),FolderPaths::KK_FILES) : "",
    'person_id' => $personId,
    'vergleichsart_select' => filter_var($request->vergleichsart_select,FILTER_SANITIZE_STRING)
]);
}
for($i = 1; $i <= $newncount; $i++){
newnue::create([
    'nuekommentar' => filter_var($request->input('nuekommentar' . $i),FILTER_SANITIZE_STRING),
    'person_id' => $personId,
    'first_intro' => filter_var($request->input('first_intro'. $i),FILTER_SANITIZE_STRING),
    'vehicle_id' => $request->hasFile('vehicle_id' . $i) ? $this->storeFile($request->file('vehicle_id' . $i),FolderPaths::KK_FILES) : null,
    'leasing' => filter_var($request->input('leasing' . $i),FILTER_SANITIZE_STRING),
    'leasing_name' => filter_var($request->input('leasing_name' .$i),FILTER_SANITIZE_STRING),
    'year_of_purchase' => filter_var($request->input('year_of_purchase' . $i),FILTER_SANITIZE_STRING),
    'placing_on_the_market' => filter_var($request->input('placing_on_the_market' . $i),FILTER_SANITIZE_STRING),
    'nationality' => filter_var($request->input('nationality' . $i),FILTER_SANITIZE_STRING),
    'insurance_date' => $request->input('insurance_date' . $i),
    'most_common' => filter_var($request->input('most_common' . $i),FILTER_SANITIZE_STRING),
    'redeemed' => filter_var($request->input('redeemed' . $i),FILTER_SANITIZE_STRING),
    'km_stood' => filter_var($request->input('nationality' . $i),FILTER_SANITIZE_STRING),
    'insurance' => filter_var($request->input('insurance' . $i),FILTER_SANITIZE_STRING),
    'traffic_legal_protection' => filter_var($request->input('traffic_legal_protection' . $i),FILTER_SANITIZE_STRING),
    'deductible' => filter_var($request->input('deductible' . $i),FILTER_SANITIZE_STRING),
    'glass_protection' => filter_var($request->input('glass_protection' . $i),FILTER_SANITIZE_STRING),
    'carried' => filter_var($request->input('carried' . $i),FILTER_SANITIZE_STRING),
    'parking_damage' => filter_var($request->input('parking_damage' . $i),FILTER_SANITIZE_STRING),
    'repair_shop' => filter_var($request->input('repair_shop' . $i),FILTER_SANITIZE_STRING),
    'hour_breakdown_assistance' => filter_var($request->input('hour_breakFILTER_SANITIZE_STRING),down_assistance' . $i),FILTER_SANITIZE_STRING),
    'accident_coverage' => filter_var($request->input('accident_coverage' . $i),FILTER_SANITIZE_STRING),
]);
}
            $pend = Pendency::where('family_id', $personId)->first();
            if ($pend) {
                $pend->done = 1;
                $pend->type = 'Eingereicht';
                $pend->save();
            } else {
                $pend = new Pendency();
                $pend->admin_id = Auth::user()->id;
                $pend->family_id = $personId;
                $pend->done = 1;
                $pend->type = 'Eingereicht';
                $pend->save();
            }

            $person = family::find($pend->family_id);
            $person->status = "Done";
            $person->save();

            $bo = Admins::role(['backoffice','admin'])->get();
foreach($bo as $b){
    $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Dokumentation für :' . family::find($personId)->first_name . ' wurde eingereicht </a>';
    $b->notify(new SendNotificationn($url));
}
if($offer > 0){
    $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Das erhaltene Angebot für den Kunden :' . family::find($personId)->first_name . ' wurde eingereicht </a>';
Admins::find($pend->admin_id)->notify(new SendNotificationn($url));
$pend1 = new Pendency();
$pend1->admin_id = $pend->admin_id;
$pend1->family_id = $pend->family_id;
$pend1->description = 'Offer';
$pend1->type = 'Offer';
$pend1->save();
  }
            return redirect()->route('dashboard')->with('success', 'Erfolgreich eingereicht und wartet auf das Backoffice!');
        } else {
            return redirect()->back();
        }
    }


    public function updateLeadDataKK($leadId, $personId, Request $request)
    {
        $pend = Pendency::find(Session::get('pend_id'));
        $pend->done = 1;
        $pend->type = "";
        $pend->save();

        $leadId = Crypt::decrypt($leadId) / 1244;
        $personId = Crypt::decrypt($personId) / 1244;
        $offer = 0;

        $existingLeadDataKK = LeadDataKK::where('person_id', $personId)->latest()->first();
        $admin_id = Crypt::decrypt($request->admin_id) / 1244;
        $leadDataKK = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'pre_insurer' => $request->hasFile('pre_insurer') ? $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES) : $existingLeadDataKK->pre_insurer,
            'id_required' => $request->hasFile('id_required') ? $this->storeFile($request->id_required, FolderPaths::KK_FILES) : $existingLeadDataKK->id_required,
            'notice_by' => $request->hasFile('notice_by') ? $this->storeFile($request->notice_by, FolderPaths::KK_FILES) : $existingLeadDataKK->notice_by,
            'power_of_attorney' => $request->hasFile('power_of_attorney') ? $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES) : $existingLeadDataKK->power_of_attorney,
            'vorversicherer_select' => filter_var($request->vorversicherer_select,FILTER_SANITIZE_STRING),
            'id_notwending_select' => filter_var($request->id_notwending_select,FILTER_SANITIZE_STRING),
            'kundingung_durch_select' => filter_var($request->kundingung_durch_select,FILTER_SANITIZE_STRING),
            'vollmacht_select' => filter_var($request->vollmacht_select,FILTER_SANITIZE_STRING),
        ];
        if ($existingLeadDataKK) {
            $existingLeadDataKK->update($leadDataKK);
        }
        $count = (int) $request->input('newgcount');
 if($request->gofert != null){
        $garray = explode(',',$request->gofert);
           foreach($garray as $gofert){
               $newg = newgegen::find($gofert);
               if($newg){
                   $newg->delete();}
           }
    }
    $gegen = newgegen::where('person_id',$personId)->get();
    for($i = 0; $i< $count; $i++){
        $curr = $i+1;

        if(isset($gegen[$i])){

                   $file = $request->file('upload_policeFahrzeug'. $curr);
                   $gegen[$i]->upload_policeFahrzeug = $request->hasFile('upload_policeFahrzeug'. $curr) ? $this->storeFile($file,FolderPaths::KK_FILES) : $gegen[$i]->upload_policeFahrzeug;
                   $gegen[$i]->comparison_type = $request->input('comparison_type' . $curr) ? $request->input('comparison_type' . $curr) : $gegen[$i]->comparison_type;
                   $gegen[$i]->commentFahrenzug = $request->input('commentFahrenzug' . $curr) ? $request->input('commentFahrenzug' . $curr) : $gegen[$i]->commentFahrenzug;
                   $gegen[$i]->offer = $request->file('offer' . $curr) ? $this->storeFile($request->file('offer' . $curr),FolderPaths::KK_FILES) : $gegen[$i]->offer;
                   $gegen[$i]->vergleichsart_select =$request->input('vergleichsart_select' . $curr);
                   $request->hasFile('offer' .$i) && !isset($gegen[$i]->offer) ? $offer++ : $offer += 0;
                   $gegen[$i]->save();
                    }
                   else{
                       $gegen = new newgegen();
                       $file = $request->file('upload_policeFahrzeug'. $curr);
                       $gegen->upload_policeFahrzeug = $request->hasFile('upload_policeFahrzeug'. $curr) ? $this->storeFile($file,FolderPaths::KK_FILES) : null;
                       $gegen->comparison_type = $request->input('comparison_type' . $curr) ? $request->input('comparison_type' . $curr) : null;
                       $gegen->commentFahrenzug = $request->input('commentFahrenzug' . $curr) ? $request->input('commentFahrenzug' . $curr) : null;
                       $gegen->person_id = $personId;
                       $gegen->offer = $request->file('offer' . $curr) ? $this->storeFile($request->file('offer'. $curr),FolderPaths::KK_FILES) : null;
                       $gegen->vergleichsart_select = $request->input('vergleichsart_select' . $curr);
                       $gegen->save();
                       $request->hasFile('offer' . $curr) ? $offer++ : $offer += 0;
                   }
                }



        $count = (int) $request->input('newncount');
        if($request->nofert != null){
            $narray = explode(',',$request->nofert);
            foreach($narray as $nofert){
                $newn = newgegen::find($nofert);
                if($newn){
                    $newn->delete();
                }
            }
            }

        $cc = 0;
        $gegen = newnue::where('person_id',$personId)->get();
        for($i = 1; $i <= $count; $i++){
            if(!empty($gegen[$i-1])){
            $file = $request->file('vehicle_id'. $i);
            $gegen[$i-1]->nationality = $request->input('nationality' . $i) ? $request->input('nationality' . $i) : $gegen[$i-1]->nationality;
            $gegen[$i-1]->nuekommentar = $request->input('nuekommentar' . $i) ? $request->input('nuekommentar' . $i) : $gegen[$i-1]->nuekommentar;
            $gegen[$i-1]->vehicle_id = $request->hasFile('vehicle_id'. $i) ? $this->storeFile($file,FolderPaths::KK_FILES) : $gegen[$i-1]->vehicle_id;
           $gegen[$i-1]->leasing = $request->input('leasing' . $i) ? $request->input('leasing' . $i) : $gegen[$i-1]->leasing;
           $gegen[$i-1]->leasing_name = $request->input('leasing_name' . $i) ? $request->input('leasing_name' . $i) : $gegen[$i-1]->leasing_name;
           $gegen[$i-1]->year_of_purchase = $request->input('year_of_purchase' . $i) ? $request->input('year_of_purchase' . $i) : $gegen[$i-1]->year_of_purchase;
           $gegen[$i-1]->placing_on_the_market = $request->input('placing_on_the_market' . $i) ? $request->input('placing_on_the_market' . $i) : $gegen[$i-1]->placing_on_the_market;
           $gegen[$i-1]->nationality = $request->input('nationality' . $i) ? $request->input('nationality' . $i) : $gegen[$i-1]->nationality;
           $gegen[$i-1]->insurance_date = $request->input('insurance_date' . $i) ? $request->input('insurance_date' . $i) : $gegen[$i-1]->insurance_date;
           $gegen[$i-1]->most_common = $request->input('most_common' . $i) ? $request->input('most_common' . $i) : $gegen[$i-1]->most_common;
           $gegen[$i-1]->redeemed = $request->input('redeemed' . $i) ? $request->input('redeemed' . $i) : $gegen[$i-1]->redeemed;
           $gegen[$i-1]->km_stood = $request->input('km_stood' . $i) ? $request->input('km_stood' . $i) : $gegen[$i-1]->km_stood;
           $gegen[$i-1]->insurance = $request->input('insurance' . $i) ? $request->input('insurance' . $i) : $gegen[$i-1]->insurance;
           $gegen[$i-1]->traffic_legal_protection = $request->input('traffic_legal_protection' . $i) ? $request->input('traffic_legal_protection' . $i) : $gegen[$i-1]->traffic_legal_protection;
           $gegen[$i-1]->deductible = $request->input('deductible' . $i) ? $request->input('deductible' . $i) : $gegen[$i-1]->deductible;
           $gegen[$i-1]->glass_protection = $request->input('glass_protection' . $i) ? $request->input('glass_protection' . $i) : $gegen[$i-1]->glass_protection;
           $gegen[$i-1]->carried = $request->input('carried' . $i) ? $request->input('carried' . $i) : $gegen[$i-1]->carried;
           $gegen[$i-1]->parking_damage = $request->input('parking_damage' . $i) ? $request->input('parking_damage' . $i) : $gegen[$i-1]->parking_damage;
           $gegen[$i-1]->repair_shop = $request->input('repair_shop' . $i) ? $request->input('repair_shop' . $i) : $gegen[$i-1]->repair_shop;
           $gegen[$i-1]->hour_breakdown_assistance = $request->input('hour_breakdown_assistance' . $i) ? $request->input('hour_breakdown_assistance' . $i) : $gegen[$i-1]->hour_breakdown_assistance;
           $gegen[$i-1]->accident_coverage = $request->input('accident_coverage' . $i) ? $request->input('accident_coverage' . $i) : $gegen[$i-1]->accident_coverage;
           $gegen[$i-1]->save();
            }
           else{
               $gegen = new newnue();
               $file = $request->file('vehicle_id'. $i);
               $gegen->nuekommentar = $request->input('nuekommentar' . $i) ? $request->input('nuekommentar' . $i) : $gegen->nuekommentar;
               $gegen->first_intro = $request->input('first_intro' . $i) ? $request->input('first_intro' . $i) : $gegen->first_intro;
               $gegen->vehicle_id = $request->hasFile('vehicle_id'. $i) ? $this->storeFile($file,FolderPaths::KK_FILES) : null;
               $gegen->leasing = $request->input('leasing' . $i) ? $request->input('leasing' . $i) : $gegen->leasing;
               $gegen->leasing_name = $request->input('leasing_name' . $i) ? $request->input('leasing_name' . $i) : null;
               $gegen->year_of_purchase = $request->input('year_of_purchase' . $i) ? $request->input('year_of_purchase' . $i) : null;
               $gegen->placing_on_the_market = $request->input('placing_on_the_market' . $i) ? $request->input('placing_on_the_market' . $i) : null;
               $gegen->nationality = $request->input('nationality' . $i) ? $request->input('nationality' . $i) : null;
               $gegen->insurance_date = $request->input('insurance_date' . $i) ? $request->input('insurance_date' . $i) : null;
               $gegen->most_common = $request->input('most_common' . $i) ? $request->input('most_common' . $i) : null;
               $gegen->redeemed = $request->input('redeemed' . $i) ? $request->input('redeemed' . $i) : null;
               $gegen->km_stood = $request->input('km_stood' . $i) ? $request->input('km_stood' . $i) : null;
               $gegen->insurance = $request->input('insurance' . $i) ? $request->input('insurance' . $i) : null;
               $gegen->traffic_legal_protection = $request->input('traffic_legal_protection' . $i) ? $request->input('traffic_legal_protection' . $i) : null;
               $gegen->deductible = $request->input('deductible' . $i) ? $request->input('deductible' . $i) : null;
               $gegen->glass_protection = $request->input('glass_protection' . $i) ? $request->input('glass_protection' . $i) : null;
               $gegen->carried = $request->input('carried' . $i) ? $request->input('carried' . $i) : null;
               $gegen->parking_damage = $request->input('parking_damage' . $i) ? $request->input('parking_damage' . $i) : null;
               $gegen->repair_shop = $request->input('repair_shop' . $i) ? $request->input('repair_shop' . $i) : null;
               $gegen->hour_breakdown_assistance = $request->input('hour_breakdown_assistance' . $i) ? $request->input('hour_breakdown_assistance' . $i) : null;
               $gegen->accident_coverage = $request->input('accident_coverage' . $i) ? $request->input('accident_coverage' . $i) : null;
               $gegen->person_id = $personId;
               $gegen->save();
           }
        }


        $existingLeadDataCounterOffered = LeadDataCounteroffered::where('person_id', $personId)->latest()->first();

        $leadDataCounteroffered = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_police') ? $this->storeFile($request->upload_police, FolderPaths::KK_FILES) : $existingLeadDataCounterOffered->upload_police,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment
        ];


        if ($existingLeadDataCounterOffered) {
            $existingLeadDataCounterOffered->update($leadDataCounteroffered);
        }

        $existingLeadDataFahrzeug = LeadDataFahrzeug::where('person_id', $personId)->latest()->first();
        $request->hasFile('offer') && !isset($existingLeadDataFahrzeug->offer) ? $offer++ : $offer += 0;
        $leadDataFahrzeug = [
            'mandatiert' => $request->hasFile('mandatiert') ? $this->storeFile($request->mandatiert, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->mandatiert,
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_policeFahrzeug') ? $this->storeFile($request->upload_policeFahrzeug, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->upload_police,
            'offer' => $request->hasFile('offer') ? $this->storeFile($request->offer, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->offer,
            'vehicle_id' => $request->hasFile('vehicle_id') ? $this->storeFile($request->vehicle_id, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->vehicle_id,
            'leasing' => $request->leasing ? $request->leasing : $existingLeadDataFahrzeug->leasing,
            'leasing_name' => $request->leasing_name ? $request->leasing_name : $existingLeadDataFahrzeug->leasing,
            'year_of_purchase' => $request->year_of_purchase,
            'placing_on_the_market' => $request->placing_on_the_market,
            'first_intro' => $request->first_intro,
            'insurance_date' => $request->insurance_date,
            'redeemed' => $request->redeemed,
            'km_stood' => $request->km_stood,
            'issue_date' => $request->issue_date,
            'nationality' => $request->nationality,
            'most_common' => $request->most_common,
            'insurance' => $request->insurance,
            'deductible' => $request->deductible,
            'carried' => $request->carried,
            'repair_shop' => $request->repair_shop,
            'accident_coverage' => $request->accident_coverage,
            'traffic_legal_protection' => $request->traffic_legal_protection,
            'grossly' => $request->grossly,
            'glass_protection' => $request->glass_protection,
            'parking_damage' => $request->parking_damage,
            'hour_breakdown_assistance' => $request->hour_breakdown_assistance,
            'comment' => $request->commentFahrenzug,
            'offer' => $request->hasFile('offer') ?  $this->storeFile($request->file('offer'),FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->offer,
            'nuekommentar' => $request->input('nuekommentar') ? $request->input('nuekommentar') : $existingLeadDataFahrzeug->nuekommentar,
            'vergleichsart_select' => $request->vergleichsart_select
        ];

        if ($existingLeadDataFahrzeug) {
            $existingLeadDataFahrzeug->update($leadDataFahrzeug);
        }
        $existingLeadDataThings = LeadDataThings::where('person_id', $personId)->latest()->first();

        $leadDataThings = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'nationality' => $request->nationality_sachen ? $request->nationality_sachen : $existingLeadDataThings->nationality_sachen,
            'residence_permit' => $request->residence_permit ? $request->residence_permit : $existingLeadDataThings->residence_permit,
            'telephone_nr' => $request->telephone_nr ? $request->telephone_nr : $existingLeadDataThings->telephone_nr,
            'email' => $request->email ? $request->email : $existingLeadDataThings->email,
            'zivilstand' => $request->zivilstand ? $request->zivilstand : $existingLeadDataThings->zivilstand,
            'employment_relationship' => $request->employment_relationship ? $request->employment_relationship : $existingLeadDataThings->employment_relationship,
            'job' => $request->job ? $request->job : $existingLeadDataThings->job,
            'payment_frequency' => $request->payment_frequency,
            'amount_per_month' => $request->amount_per_month,
            'share_guarantee' => $request->share_guarantee,
            'start_of_contract' => $request->start_of_contract,
            'premium_exemption' => $request->premium_exemption,
            'eu_pension' => $request->eu_pension,
            'death_benefit' => $request->death_benefit,
            'smoker' => $request->smoker ? $request->smoker : $existingLeadDataThings->smoker,
            'desired' => $request->desired,
        ];


        if ($existingLeadDataThings) {
            $existingLeadDataThings->update($leadDataThings);
        }

        $existingLeadDataPrevention = LeadDataPrevention::where('person_id', $personId)->latest()->first();
        $countoffer = 0;
        if ($request->hasFile('newoffer') && !isset($existingLeadDataPrevention->newoffer)){
            $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Das erhaltene Angebot für den Sachen für Kunden:' . family::find($personId)->first_name . ' wurde eingereicht </a>';
            Admins::find($pend->admin_id)->notify(new SendNotificationn($url));
        }
        $leadDataPrevention = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_police__') ? $this->storeFile($request->file('upload_police__'), FolderPaths::KK_FILES) : $existingLeadDataPrevention->upload_police,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment__,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'sum_insured' => $request->sum_insured,
            'desired_additional_coverage' => $request->desired_additional_coverage,
            'personal_liability' => $request->personal_liability,
            'society' => $request->society,
            'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
            'Hvergleichsart_select' => $request->Hvergleichsart_select,
            'newoffer' => $request->hasFile('newoffer') ? $this->storeFile($request->file('newoffer'), FolderPaths::KK_FILES) : $existingLeadDataPrevention->newoffer,
        ];


        if ($existingLeadDataPrevention) {
            $existingLeadDataPrevention->update($leadDataPrevention);
        }



        $bo = Admins::role(['backoffice','admin'])->get();
        foreach($bo as $b){
            $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Dokumentation für :' . family::find($personId)->first_name . ' wurde eingereicht </a>';
            $b->notify(new SendNotificationn($url));
        }
          if($offer > 0){
            $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Das erhaltene Angebot für den Kunden :' . family::find($personId)->first_name . ' wurde eingereicht </a>';
        Admins::find($pend->admin_id)->notify(new SendNotificationn($url));
        $pend1 = new Pendency();
        $pend1->admin_id = $pend->admin_id;
        $pend1->family_id = $pend->family_id;
        $pend1->description = 'Offer';
        $pend1->type = 'Offer';
        $pend1->save();
          }
          $person = family::find($pend->family_id);
          $person->status = "Done";
          $person->save();




        return redirect()->route('tasks')->with('success', 'Aufgabe erfolgreich übermittelt');
    }



    public function deleteLeadDataKK($dataId)
    {
        return LeadDataKK::where('id', $dataId)->delete();
    }

    public function deleteLeadDataCounteroffered($dataId)
    {
        return LeadDataCounteroffered::where('id', $dataId)->delete();
    }

    public function deleteLeadDataFahrzeug($dataId)
    {
        return LeadDataFahrzeug::where('id', $dataId)->delete();
    }

    public function deleteLeadDataThings($dataId)
    {
        return LeadDataThings::where('id', $dataId)->delete();
    }

    public function deleteLeadDataPrevention($dataId)
    {
        return LeadDataPrevention::where('id', $dataId)->delete();
    }
}
