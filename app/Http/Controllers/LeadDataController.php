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


                return view('updatedocument', compact('data', 'lead','admin_id','mandatiert','mandatierturl','id'));


            } else {
                if (Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) {
                    $pend = Pendency::find(Session::get('pend_id'));
                $pend->completed = 1;
                $pend->save();
                $pendencies = Pendency::where('family_id',$pend->family_id)->get();
                $pcnt = 0;
                foreach($pendencies as $pend) {
                    if($pend->completed == 0){
                           $pcnt++;
                    }
                }
                if($pcnt == 0){ $person = family::find($pend->family_id); $person->status = "Done"; $person->save();}
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
        $leadId = Crypt::decrypt($leadIdd);
        $leadId /= 1244;
        $personId = Crypt::decrypt($personIdd);
        $personId /= 1244;
        $newgcount = (int) $request->input('newgcount');
        $newncount = (int) $request->input('newncount');


        $person = family::find($personId);
        if ($person->lead->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('salesmanager') || Pendency::where('family_id', $personId)->first()->admin_id == Auth::user()->id) {
            LeadDataKK::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'pre_insurer' => $request->pre_insurer ? $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES) : null,
                'id_required' => $request->id_required ? $this->storeFile($request->id_required, FolderPaths::KK_FILES) : null,
                'notice_by' => $request->notice_by ? $this->storeFile($request->notice_by, FolderPaths::KK_FILES) : null,
                'power_of_attorney' => $request->power_of_attorney ? $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES) : null,
                'vorversicherer_select' => $request->vorversicherer_select,
                'id_notwending_select' => $request->id_notwending_select,
                'kundingung_durch_select' => $request->kundingung_durch_select,
                'vollmacht_select' => $request->vollmacht_select
            ]);
            LeadDataCounteroffered::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_police ? $this->storeFile($request->upload_police, FolderPaths::KK_FILES) : null,
                'comparison_type' => $request->comparison_type,
                'comment' => $request->comment
            ]);
            LeadDataFahrzeug::create([

                'mandatiert' => $request->mandatiert ? $this->storeFile($request->mandatiert, FolderPaths::KK_FILES) : null,
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_policeFahrzeug ? $this->storeFile($request->upload_policeFahrzeug, FolderPaths::KK_FILES) : null,
                'vehicle_id' => $request->vehicle_id,
                'leasing' => $request->leasing,
                'leasing_name' => $request->leasing_name,
                'year_of_purchase' => $request->year_of_purchase,
                'placing_on_the_market' => $request->placing_on_the_market,
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
                'first_intro' => $request->first_intro,
                'offer' => $request->hasFile('offer') ? $this->storeFile($request->offer,FolderPaths::KK_FILES) : null,
                'vergleichsart_select' => $request->vergleichsart_select
            ]);
            LeadDataThings::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'nationality' => $request->nationality_sachen,
                'residence_permit' => $request->residence_permit,
                'telephone_nr' => $request->telephone_nr,
                'email' => $request->email,
                'zivilstand' => $request->zivilstand,
                'employment_relationship' => $request->employment_relationship,
                'job' => $request->job,
                'payment_frequency' => $request->payment_frequency,
                'amount_per_month' => $request->amount_per_month,
                'share_guarantee' => $request->share_guarantee,
                'start_of_contract' => $request->start_of_contract,
                'premium_exemption' => $request->premium_exemption,
                'eu_pension' => $request->eu_pension,
                'death_benefit' => $request->death_benefit,
                'smoker' => $request->smoker,
                'desired' => $request->desired,
            ]);
            LeadDataPrevention::create([
                'leads_id' => $leadId,
                'person_id' => $personId,
                'upload_police' => $request->upload_police__ ? $this->storeFile($request->upload_police__, FolderPaths::KK_FILES) : null,
                'comparison_type' => $request->comparison_type,
                'comment' => $request->comment__,
                'offer' => $request->offersach ? $this->storeFile($request->offersach, FolderPaths::KK_FILES) : null,
                'number_of_people' => $request->number_of_people,
                'number_of_rooms' => $request->number_of_rooms,
                'sum_insured' => $request->sum_insured,
                'desired_additional_coverage' => $request->desired_additional_coverage,
                'personal_liability' => $request->personal_liability,
                'society' => $request->society,
                'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
                'Hvergleichsart_select' => $request->Hvergleichsart_select,
            ]);
            $family = family::where('id', $personId)->first();
            $status = ['status' => 'Submited'];
            $family->update($status);


for($i = 1; $i <= $newgcount; $i++){
    $file = $request->file('upload_policeFahrzeug' . $i);
newgegen::create([
    'comparison_type' => $request->input('comparison_type' . $i) ? $request->input('comparison_type' . $i) : null,
    'upload_policeFahrzeug' => $request->hasFile('upload_policeFahrzeug' . $i) ? $this->storeFile($file, FolderPaths::KK_FILES) : null,
    'commentFahrenzug' => $request->input('commentFahrenzug' . $i) ? $request->input('commentFahrenzug' . $i) : "",
    'offer' => $request->file('offer'. $i) ? $this->storeFile($request->file('offer' . $i),FolderPaths::KK_FILES) : "",
    'person_id' => $personId,
    'vergleichsart_select' => $request->vergleichsart_select
]);
}
for($i = 1; $i <= $newncount; $i++){
newnue::create([
    'person_id' => $personId,
    'first_intro' => $request->input('first_intro'. $i),
    'vehicle_id' => $request->hasFile('vehicle_id' . $i) ? $this->storeFile($request->file('vehicle_id' . $i),FolderPaths::KK_FILES) : null,
    'leasing' => $request->input('leasing' . $i),
    'leasing_name' => $request->input('leasing_name' .$i),
    'year_of_purchase' => $request->input('year_of_purchase' . $i),
    'placing_on_the_market' => $request->input('placing_on_the_market' . $i),
    'nationality' => $request->input('nationality' . $i),
    'insurance_date' => $request->input('insurance_date' . $i),
    'most_common' => $request->input('most_common' . $i),
    'redeemed' => $request->input('redeemed' . $i),
    'km_stood' => $request->input('nationality' . $i),
    'insurance' => $request->input('insurance' . $i),
    'traffic_legal_protection' => $request->input('traffic_legal_protection' . $i),
    'deductible' => $request->input('deductible' . $i),
    'glass_protection' => $request->input('glass_protection' . $i),
    'carried' => $request->input('carried' . $i),
    'parking_damage' => $request->input('parking_damage' . $i),
    'repair_shop' => $request->input('repair_shop' . $i),
    'hour_breakdown_assistance' => $request->input('hour_breakdown_assistance' . $i),
    'accident_coverage' => $request->input('accident_coverage' . $i)
]);
}
            $pend = Pendency::where('family_id', $personId)->first();
            if ($pend) {
                $pend->done = 1;
                $pend->save();
            } else {
                $pend = new Pendency();
                $pend->admin_id = Auth::user()->id;
                $pend->family_id = $personId;
                $pend->done = 1;
                $pend->save();
            }

            family::find($personId)->update(['
            status' => "Done"]);

            $bo = Admins::role(['backoffice','admin'])->get();
foreach($bo as $b){
    $url =  '<a href="' . route("costumer_form",[Crypt::encrypt($personId * 1244)]) . '"> Documentation for :' . family::find($personId)->first_name . ' has been submitted</a>';
    $b->notify(new SendNotificationn($url));
}
            return redirect()->route('dashboard')->with('success', 'Successfully submitted and will be waiting for the backoffice!');
        } else {
            return redirect()->back();
        }
    }


    public function updateLeadDataKK($leadId, $personId, Request $request)
    {
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
            'vorversicherer_select' => $request->vorversicherer_select,
            'id_notwending_select' => $request->id_notwending_select,
            'kundingung_durch_select' => $request->kundingung_durch_select,
            'vollmacht_select' => $request->vollmacht_select,
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
        $request->file('offer' . $curr) ? $offer++ : $offer += 0;
        if(isset($gegen[$i])){
                   $file = $request->file('upload_policeFahrzeug'. $curr);
                   $gegen[$i]->upload_policeFahrzeug = $request->hasFile('upload_policeFahrzeug'. $curr) ? $this->storeFile($file,FolderPaths::KK_FILES) : $gegen[$i]->upload_policeFahrzeug;
                   $gegen[$i]->comparison_type = $request->input('comparison_type' . $curr) ? $request->input('comparison_type' . $curr) : $gegen[$i]->comparison_type;
                   $gegen[$i]->commentFahrenzug = $request->input('commentFahrenzug' . $curr) ? $request->input('commentFahrenzug' . $curr) : $gegen[$i]->commentFahrenzug;
                   $gegen[$i]->offer = $request->file('offer' . $curr) ? $this->storeFile($request->file('offer' . $curr),FolderPaths::KK_FILES) : $gegen[$i]->offer;
                   $gegen[$i]->vergleichsart_select =$request->input('vergleichsart_select' . $curr);
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
        $request->file('offer') ? $offer++ : $offer += 0;
        $leadDataFahrzeug = [
            'mandatiert' => $request->hasFile('mandatiert') ? $this->storeFile($request->mandatiert, FolderPaths::KK_FILES) : null,
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_policeFahrzeug') ? $this->storeFile($request->upload_policeFahrzeug, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->upload_police,
            'offer' => $request->hasFile('offer') ? $this->storeFile($request->offer, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->offer,
            'vehicle_id' => $request->hasFile('vehicle_id') ? $this->storeFile($request->vehicle_id, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->vehicle_id,
            'leasing' => $request->leasing,
            'leasing_name' => $request->leasing_name,
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
        $leadDataPrevention = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_police__') ? $this->storeFile($request->upload_police__, FolderPaths::KK_FILES) : $existingLeadDataPrevention->upload_police,
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
        ];


        if ($existingLeadDataPrevention) {
            $existingLeadDataPrevention->update($leadDataPrevention);
        }

        $pend = Pendency::find(Session::get('pend_id'));
        $pend->done = 1;
        $pend->type = "";
        $pend->save();

        $bo = Admins::role(['backoffice','admin'])->get();
        foreach($bo as $b){
            $url =  '<a href="'  . route("leadfamilyperson",[Crypt::encrypt($personId * 1244),"admin_id" => Crypt::encrypt(Pendency::find($pend->id)->admin_id * 1244),"pend_id" => Pendency::find($pend->id)->id]) . '"> Documentation for :' . family::find($personId)->first_name . ' has been submitted </a>';
            $b->notify(new SendNotificationn($url));
        }
          if($offer > 0){
            $url =  '<a href="'  . route("costumer_form",Crypt::encrypt($personId * 1244)) . '">Received offer for client :' . family::find($personId)->first_name . ' has been submitted </a>';
        Admins::find($pend->admin_id)->notify(new SendNotificationn($url));
        $pend1 = new Pendency();
        $pend1->admin_id = $pend->admin_id;
        $pend1->family_id = $pend->family_id;
        $pend1->description = 'Offer';
        $pend1->save();
          }
          family::find($pend->family_id)->update(['status' => 'Done']);


        return redirect()->route('acceptdata', ['id' => Crypt::encrypt($personId * 1244),'admin_id' => Crypt::encrypt($admin_id * 1244)]);
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
