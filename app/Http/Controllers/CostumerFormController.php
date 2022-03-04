<?php

namespace App\Http\Controllers;

use App\Models\CostumerProduktAutoversicherung;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktHausrat;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\CostumerStatusGrundversicherung;
use App\Models\CostumerStatusHausrat;
use App\Models\CostumerStatusRetchsschutz;
use App\Models\CostumerStatusVorsorge;
use App\Models\CostumerStatusZusatzversicherung;
use App\Models\family;
use App\Models\LeadDataFahrzeug;
use App\Models\LeadDataPrevention;
use App\Models\LeadDataThings;
use App\Models\newgegen;
use App\Models\newnue;
use App\Notifications\SendNotificationn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Admins;
use App\Models\LeadDataKK;
use App\Models\Pendency;


class CostumerFormController extends Controller
{
    public function costumer_form($id){
        $id = Crypt::decrypt($id) / 1244;

        if(Auth::guard('admins')->user()->hasRole('backoffice') ||Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('management')){
            $family = family::where('id',$id)->first();
            if ($family->kundportfolio == 0 && (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))) {
                $costumer = family::findOrFail($id);

                $dataKK = LeadDataKK::where('person_id', $id)->first();
                $dataFahrzeug = LeadDataFahrzeug::where('person_id',$id)->first();
                $dataPrevention = LeadDataPrevention::where('person_id',$id)->first();
                $newGegenOfertenCount = newgegen::where('person_id',$id)->count();
                $newNeueOfertenCount = newnue::where('person_id',$id)->count();

                return view('costumer_form')->with(compact('costumer','newNeueOfertenCount','newGegenOfertenCount','dataKK','dataFahrzeug','dataPrevention'));

            }else{
                if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')) {
                    $grundversicherung = CostumerStatusGrundversicherung::where('person_idG', $id)->first();
                    $hausrat = CostumerStatusHausrat::where('person_idH', $id)->first();
                    $retchsschutz = CostumerStatusRetchsschutz::where('person_idR', $id)->first();
                    $vorsorge = CostumerStatusVorsorge::where('person_idV', $id)->first();
                    $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ', $id)->first();
                    $grundversicherungP = CostumerProduktGrundversicherung::where('person_id_PG', $id)->get();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR', $id)->first();
                    $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV', $id)->first();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('person_id_PZ', $id)->get();
                    $hausratP = CostumerProduktHausrat::where('person_id_PH', $id)->first();
                    $autoversicherungP = CostumerProduktAutoversicherung::where('person_id_PA', $id)->first();
                    $costumer = family::findOrFail($id);
                    $dataKK = LeadDataKK::where('person_id', $id)->first();
                    $dataFahrzeug = LeadDataFahrzeug::where('person_id',$id)->first();
                    $dataPrevention = LeadDataPrevention::where('person_id',$id)->first();


                    return view('edit_costumer_form')
                        ->with(compact('costumer', 'grundversicherung',
                            'hausrat', 'retchsschutz', 'vorsorge',
                            'zusatzversicherung', 'grundversicherungP',
                            'retchsschutzP', 'vorsorgeP','hausratP','autoversicherungP',
                            'zusatzversicherungP','dataKK','dataFahrzeug','dataPrevention'));


                }
                if(Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('fs')|| Auth::guard('admins')->user()->hasRole('management')){
                    $grundversicherung = CostumerStatusGrundversicherung::where('person_idG', $id)->first();
                    $hausrat = CostumerStatusHausrat::where('person_idH', $id)->first();
                    $retchsschutz = CostumerStatusRetchsschutz::where('person_idR', $id)->first();
                    $vorsorge = CostumerStatusVorsorge::where('person_idV', $id)->first();
                    $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ', $id)->first();
                    $grundversicherungP = CostumerProduktGrundversicherung::where('person_id_PG', $id)->get();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR', $id)->first();
                    $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV', $id)->first();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('person_id_PZ', $id)->get();
                    $autoversicherungP = CostumerProduktAutoversicherung::where('person_id_PA', $id)->first();
                    $hausratP = CostumerProduktHausrat::where('person_id_PH', $id)->first();
                    $costumer = family::findOrFail($id);

                    $dataKK = LeadDataKK::where('person_id', $id)->first();
                    $dataFahrzeug = LeadDataFahrzeug::where('person_id',$id)->first();
                    $dataPrevention = LeadDataPrevention::where('person_id',$id)->first();

                    return view('view_costumer_form')
                        ->with(compact('costumer', 'grundversicherung',
                            'hausrat', 'retchsschutz', 'vorsorge',
                            'zusatzversicherung', 'grundversicherungP',
                            'retchsschutzP', 'vorsorgeP','hausratP','autoversicherungP',
                            'zusatzversicherungP','dataKK','dataFahrzeug','dataPrevention'));

                }
            }
        }else{
            echo 'You Dont Have Permissions To Access In This Page';
        }
    }


    public function save_costumer_form(Request $request, $id){
        $id = Crypt::decrypt($id) / 1244;

        $grundversicherung = new CostumerStatusGrundversicherung();
        $hausrat = new CostumerStatusHausrat();
        $retchsschutz = new CostumerStatusRetchsschutz();
        $vorsorge = new CostumerStatusVorsorge();
        $zusatzversicherung = new CostumerStatusZusatzversicherung();


        $retchsschutzP = new CostumerProduktRechtsschutz();
        $vorsorgeP = new CostumerProduktVorsorge();

        $autoversicherungP = new CostumerProduktAutoversicherung();
        $hausratP = new CostumerProduktHausrat();


            $grundversicherung->person_idG = $id;
            $grundversicherung->societyG = $request->societyG;
            $grundversicherung->kvg_premiumG = $request->kvg_premiumG;
            $grundversicherung->statusG = $request->statusG;
            $grundversicherung->modification_dateG = $request->modification_dateG;
            $grundversicherung->provisionG = $request->provisionG;
            $grundversicherung->cidG = $request->cidG;


            $hausrat->person_idH = $id;
            $hausrat->societyH = $request->societyH;
            $hausrat->kvg_premiumH = $request->kvg_premiumH;
            $hausrat->modification_dateH = $request->modification_dateH;
            $hausrat->provisionH = $request->provisionH;
            $hausrat->cidH = $request->cidH;

            $retchsschutz->person_idR = $id;
            $retchsschutz->productR = $request->productR;
            $retchsschutz->durationR = $request->durationR;
            $retchsschutz->statusR = $request->statusR;
            $retchsschutz->modification_dateR = $request->modification_dateR;
            $retchsschutz->provisionR = $request->provisionR;
            $retchsschutz->cidR = $request->cidR;



            $vorsorge->person_idV = $id;
            $vorsorge->societyV = $request->societyV;
            $vorsorge->productionV = $request->productionV;
            $vorsorge->statusV = $request->statusV;
            $vorsorge->modification_dateV = $request->modification_dateV;
            $vorsorge->provisionV = $request->provisionV;
            $vorsorge->cidV = $request->cidV;




            $zusatzversicherung->person_idZ = $id;
            $zusatzversicherung->societyZ = $request->societyZ;
            $zusatzversicherung->vvg_premiumZ = $request->vvg_premiumZ;
            $zusatzversicherung->statusZ = $request->statusZ;
            $zusatzversicherung->modification_dateZ = $request->modification_dateZ;
            $zusatzversicherung->provisionZ = $request->provisionZ;
            $zusatzversicherung->cidZ = $request->cidZ;


            $cnt =  newgegen::where('person_id',$id)->count() +1;
            $pcnt = 0;
            for ($i = 1; $i <= $cnt; $i++) {
                    $grundversicherungP = new CostumerProduktGrundversicherung();
                    $grundversicherungP->person_id_PG = $id;
                    $grundversicherungP->graduation_date_PG = $request->input('graduation_date_PG' . $i);
                    $grundversicherungP->society_PG = $request->input('society_PG' . $i);
                    $grundversicherungP->product_PG = $request->input('product_PG' . $i);
                    $grundversicherungP->status_PG = $request->input('status_PG' . $i);
                    $grundversicherungP->last_adjustment_PG = $request->input('last_adjustment_PG' . $i);
                    $grundversicherungP->total_commisions_PG = $request->input('total_commisions_PG' . $i);
                    $grundversicherungP->save();
                    $pcnt++;

            }



            if($request->status_PG == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $retchsschutzP->person_id_PR = $id;
            $retchsschutzP->graduation_date_PR = $request->graduation_date_PR;
            $retchsschutzP->society_PR = $request->society_PR;
            $retchsschutzP->produkt_PR = $request->produkt_PR;
            $retchsschutzP->status_PR = $request->status_PR;
            $retchsschutzP->last_adjustment_PR = $request->last_adjustment_PR;
            $retchsschutzP->total_commisions_PR = $request->total_commisions_PR;

            if($request->status_PR == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $vorsorgeP->person_id_PV = $id;
            $vorsorgeP->graduation_date_PV = $request->graduation_date_PV;
            $vorsorgeP->begin_PV = $request->begin_PV;
            $vorsorgeP->society_PV = $request->society_PV;
            $vorsorgeP->pramie_PV = $request->pramie_PV;
            $vorsorgeP->payment_rythm_PV = $request->payment_rythm_PV;
            $vorsorgeP->duration_from_PV = $request->duration_from_PV;
            $vorsorgeP->duration_to_PV = $request->duration_to_PV;
            $vorsorgeP->production_PV = $request->production_PV;
            $vorsorgeP->status_PV = $request->status_PV;
            $vorsorgeP->last_adjustment_PV = $request->last_adjustment_PV;
            $vorsorgeP->total_commisions_PV = $request->total_commisions_PV;

            if($request->status_PV == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $autoversicherungP->person_id_PA = $id;
            $autoversicherungP->society_PA = $request->society_PA;
            $autoversicherungP->beginning_insurance_PA = $request->beginning_insurance_PA;
            $autoversicherungP->insurance_PA = $request->insurance_PA;
            $autoversicherungP->status_PA = $request->status_PA;
            $autoversicherungP->last_adjustment_PA = $request->last_adjustment_PA;
            $autoversicherungP->total_commisions_PA = $request->total_commisions_PA;

            if($request->status_PA == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }
            $hausratP->person_id_PH = $id;
            $hausratP->society_PH = $request->society_PH;
            $hausratP->beginning_insurance_PH = $request->beginning_insurance_PH;
            $hausratP->insurance_PH = $request->insurance_PH;
            $hausratP->status_PH = $request->status_PH;
            $hausratP->last_adjustment_PH = $request->last_adjustment_PH;
            $hausratP->total_commisions_PH = $request->total_commisions_PH;

            if($request->status_PH == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Your costumer :' . family::find($id)->first_name . ' has been provisionert</a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }



        $cnt =  newnue::where('person_id',$id)->count() +1;
        $pcnt = 0;
        for ($i = 1; $i <= $cnt; $i++) {
            $zusatzversicherungP = new CostumerProduktZusatzversicherung();
            $zusatzversicherungP->person_id_PZ = $id;

                $zusatzversicherungP->graduation_date_PZ = $request->input('graduation_date_PZ' . $i);
                $zusatzversicherungP->society_PZ = $request->input('society_PZ' . $i);
                $zusatzversicherungP->produkt_PZ = $request->input('produkt_PZ' . $i);
                $zusatzversicherungP->vvg_premium_PZ = $request->input('vvg_premium_PZ' . $i);
                $zusatzversicherungP->duration_from_PZ = $request->input('duration_from_PZ' . $i);
                $zusatzversicherungP->duration_to_PZ = $request->input('duration_to_PZ' . $i);
                $zusatzversicherungP->status_PZ = $request->input('status_PZ' . $i);
                $zusatzversicherungP->last_adjustment_PZ = $request->input('last_adjustment_PZ' . $i);
                $zusatzversicherungP->provision_PZ = $request->input('provision_PZ' . $i);
                $zusatzversicherungP->total_commisions_PZ = $request->input('total_commisions_PZ' . $i);
                $zusatzversicherungP->save();
                $pcnt++;

        }


            if($request->statusPZ == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

        if($grundversicherung->save() && $hausrat->save() && $retchsschutz->save() && $vorsorge->save() &&
            $zusatzversicherung->save() && $retchsschutzP->save() && $vorsorgeP->save() && $autoversicherungP->save()
            && $hausratP->save()) {
            family::where('id',$id)->update(['kundportfolio'=>1]);
            return redirect()->route('costumers')->with('success', 'Action Successfully Made');
        }else{
            return redirect()->back()->with('fail', 'Action Not Done');
        }

    }

    public function edit_costumer_kundportfolio(Request $request, $id){
        $id = Crypt::decrypt($id) / 1244;


        $grundversicherung = CostumerStatusGrundversicherung::where('person_idG',$id)->update([
           'societyG'=> $request->societyG,
           'kvg_premiumG' => $request->kvg_premiumG,
           'statusG'=> $request->statusG,
           'modification_dateG'=> $request->modification_dateG,
           'provisionG'=> $request->provisionG,
           'cidG'=> $request->cidG,
        ]);
        $hausrat = CostumerStatusHausrat::where('person_idH',$id)->update([
            'societyH'=> $request->societyH,
            'kvg_premiumH' => $request->kvg_premiumH,
            'modification_dateH'=> $request->modification_dateH,
            'provisionH'=> $request->provisionH,
            'cidH'=> $request->cidH,
        ]);
        $retchsschutz = CostumerStatusRetchsschutz::where('person_idR',$id)->update([
            'productR'=> $request->productR,
            'durationR' => $request->durationR,
            'statusR'=> $request->statusR,
            'modification_dateR'=> $request->modification_dateR,
            'provisionR'=> $request->provisionR,
            'cidR'=> $request->cidR,
        ]);

        $vorsorge = CostumerStatusVorsorge::where('person_idV',$id)->update([
            'societyV'=> $request->societyV,
            'productionV' => $request->productionV,
            'statusV'=> $request->statusV,
            'modification_dateV'=> $request->modification_dateV,
            'provisionV'=> $request->provisionV,
            'cidV'=> $request->cidV,
        ]);

        $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ',$id)->update([
            'societyZ'=> $request->societyZ,
            'vvg_premiumZ' => $request->vvg_premiumZ,
            'statusZ'=> $request->statusZ,
            'modification_dateZ'=> $request->modification_dateZ,
            'provisionZ'=> $request->provisionZ,
            'cidZ'=> $request->cidZ,
        ]);

        $pcnt = 1;
        foreach (CostumerProduktGrundversicherung::where('person_id_PG',$id)->get() as $objekt){
                $objekt->graduation_date_PG = $request->input('graduation_date_PG' . $pcnt);
                $objekt->society_PG = $request->input('society_PG' . $pcnt);
                $objekt->product_PG = $request->input('product_PG' . $pcnt);
                $objekt->status_PG = $request->input('status_PG' . $pcnt);
                $objekt->last_adjustment_PG= $request->input('last_adjustment_PG' . $pcnt);
                $objekt->total_commisions_PG = $request->input('total_commisions_PG' . $pcnt);
                $objekt->save();
            $pcnt++;
        }

        if($request->status_PG == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }

        $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR',$id)->update([
            'graduation_date_PR'=> $request->graduation_date_PR,
            'society_PR' => $request->society_PR,
            'produkt_PR'=> $request->produkt_PR,
            'status_PR'=> $request->status_PR,
            'last_adjustment_PR'=> $request->last_adjustment_PR,
            'total_commisions_PR'=> $request->total_commisions_PR,
        ]);
        if($request->status_PR == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }

        $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV',$id)->update([
            'graduation_date_PV'=> $request->graduation_date_PV,
            'begin_PV' => $request->begin_PV,
            'society_PV'=> $request->society_PV,
            'pramie_PV'=> $request->pramie_PV,
            'payment_rythm_PV'=> $request->payment_rythm_PV,
            'duration_from_PV'=> $request->duration_from_PV,
            'duration_to_PV'=> $request->duration_to_PV,
            'production_PV'=> $request->production_PV,
            'status_PV'=> $request->status_PV,
            'last_adjustment_PV'=> $request->last_adjustment_PV,
            'total_commisions_PV'=> $request->total_commisions_PV,
        ]);
        if($request->status_PV == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }


        $autoversicherungP = CostumerProduktAutoversicherung::where('person_id_PA',$id)->update([
            'society_PA'=> $request->society_PA,
            'beginning_insurance_PA' => $request->beginning_insurance_PA,
            'insurance_PA'=> $request->insurance_PA,
            'status_PA'=> $request->status_PA,
            'last_adjustment_PA'=> $request->last_adjustment_PA,
            'total_commisions_PA'=> $request->total_commisions_PA,
        ]);
        if($request->status_PA == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }

        $hausratP = CostumerProduktHausrat::where('person_id_PH',$id)->update([
            'society_PH'=> $request->society_PH,
            'beginning_insurance_PH' => $request->beginning_insurance_PH,
            'insurance_PH'=> $request->insurance_PH,
            'status_PH'=> $request->status_PH,
            'last_adjustment_PH'=> $request->last_adjustment_PH,
            'total_commisions_PH'=> $request->total_commisions_PH,
        ]);
        if($request->status_PH == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }



        $pcnt = 1;
        foreach (CostumerProduktZusatzversicherung::where('person_id_PZ',$id)->get() as $objekt){
            $objekt->graduation_date_PZ = $request->input('graduation_date_PZ' . $pcnt);
            $objekt->society_PZ = $request->input('society_PZ' . $pcnt);
            $objekt->produkt_PZ = $request->input('produkt_PZ' . $pcnt);
            $objekt->vvg_premium_PZ = $request->input('vvg_premium_PZ' . $pcnt);
            $objekt->duration_from_PZ= $request->input('duration_from_PZ' . $pcnt);
            $objekt->duration_to_PZ = $request->input('duration_to_PZ' . $pcnt);
            $objekt->status_PZ = $request->input('status_PZ' . $pcnt);
            $objekt->last_adjustment_PZ = $request->input('last_adjustment_PZ' . $pcnt);
            $objekt->provision_PZ = $request->input('provision_PZ' . $pcnt);
            $objekt->total_commisions_PZ = $request->input('total_commisions_PZ' . $pcnt);
            $objekt->save();
            $pcnt++;
        }
        if($request->status_PZ == 'Provisionert'){
            $familyperson = family::find($id)->lead->assign_to_id;
            $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
            Admins::find($familyperson)->notify(new SendNotificationn($url));
        }

        return redirect()->route('costumers')->with('success' , 'Your changes has been successfully done');



    }

}
