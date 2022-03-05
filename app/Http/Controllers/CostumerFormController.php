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
            echo 'Sie haben keine Berechtigung zum Zugriff auf diese Seite';
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


            $grundversicherung->person_idG = filter_var($id,FILTER_SANITIZE_STRING);
            $grundversicherung->societyG = filter_var($request->societyG,FILTER_SANITIZE_STRING);
            $grundversicherung->kvg_premiumG = filter_var($request->kvg_premiumG,FILTER_SANITIZE_STRING);
            $grundversicherung->statusG = filter_var($request->statusG,FILTER_SANITIZE_STRING);
            $grundversicherung->modification_dateG = filter_var($request->modification_dateG,FILTER_SANITIZE_STRING);
            $grundversicherung->provisionG = filter_var($request->provisionG,FILTER_SANITIZE_STRING);
            $grundversicherung->cidG = filter_var($request->cidG,FILTER_SANITIZE_STRING);


            $hausrat->person_idH = filter_var($id,FILTER_SANITIZE_STRING);
            $hausrat->societyH = filter_var($request->societyH,FILTER_SANITIZE_STRING);
            $hausrat->kvg_premiumH = filter_var($request->kvg_premiumH,FILTER_SANITIZE_URL);
            $hausrat->modification_dateH = filter_var($request->modification_dateH,FILTER_SANITIZE_STRING);
            $hausrat->provisionH = filter_var($request->provisionH,FILTER_SANITIZE_STRING);
            $hausrat->cidH = filter_var($request->cidH,FILTER_SANITIZE_STRING);

            $retchsschutz->person_idR = filter_var($id,FILTER_SANITIZE_STRING);
            $retchsschutz->productR = filter_var($request->productR,FILTER_SANITIZE_STRING);
            $retchsschutz->durationR = filter_var($request->durationR,FILTER_SANITIZE_STRING);
            $retchsschutz->statusR = filter_var($request->statusR,FILTER_SANITIZE_STRING);
            $retchsschutz->modification_dateR = filter_var($request->modification_dateR,FILTER_SANITIZE_STRING);
            $retchsschutz->provisionR = filter_var($request->provisionR,FILTER_SANITIZE_STRING);
            $retchsschutz->cidR = filter_var($request->cidR,FILTER_SANITIZE_STRING);



            $vorsorge->person_idV = filter_var($id,FILTER_SANITIZE_STRING);
            $vorsorge->societyV = filter_var($request->societyV,FILTER_SANITIZE_STRING);
            $vorsorge->productionV = filter_var($request->productionV,FILTER_SANITIZE_STRING);
            $vorsorge->statusV = filter_var($request->statusV,FILTER_SANITIZE_STRING);
            $vorsorge->modification_dateV = filter_var($request->modification_dateV,FILTER_SANITIZE_STRING);
            $vorsorge->provisionV = filter_var($request->provisionV,FILTER_SANITIZE_STRING);
            $vorsorge->cidV = filter_var($request->cidV,FILTER_SANITIZE_STRING);




            $zusatzversicherung->person_idZ = filter_var($id,FILTER_SANITIZE_STRING);
            $zusatzversicherung->societyZ = filter_var($request->societyZ,FILTER_SANITIZE_STRING);
            $zusatzversicherung->vvg_premiumZ = filter_var($request->vvg_premiumZ,FILTER_SANITIZE_STRING);
            $zusatzversicherung->statusZ = filter_var($request->statusZ,FILTER_SANITIZE_STRING);
            $zusatzversicherung->modification_dateZ = filter_var($request->modification_dateZ,FILTER_SANITIZE_STRING);
            $zusatzversicherung->provisionZ = filter_var($request->provisionZ,FILTER_SANITIZE_STRING);
            $zusatzversicherung->cidZ = filter_var($request->cidZ,FILTER_SANITIZE_STRING);


            $cnt =  newgegen::where('person_id',$id)->count() +1;
            $pcnt = 0;
            for ($i = 1; $i <= $cnt; $i++) {
                    $grundversicherungP = new CostumerProduktGrundversicherung();
                    $grundversicherungP->person_id_PG = filter_var($id,FILTER_SANITIZE_URL);
                    $grundversicherungP->graduation_date_PG = filter_var($request->input('graduation_date_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->society_PG = filter_var($request->input('society_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->product_PG = filter_var($request->input('product_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->status_PG = filter_var($request->input('status_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->last_adjustment_PG = filter_var($request->input('last_adjustment_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->total_commisions_PG = filter_var($request->input('total_commisions_PG' . $i),FILTER_SANITIZE_STRING);
                    $grundversicherungP->save();
                    $pcnt++;

            }



            if($request->status_PG == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $retchsschutzP->person_id_PR = filter_var($id,FILTER_SANITIZE_STRING);
            $retchsschutzP->graduation_date_PR = filter_var($request->graduation_date_PR,FILTER_SANITIZE_STRING);
            $retchsschutzP->society_PR = filter_var($request->society_PR,FILTER_SANITIZE_STRING);
            $retchsschutzP->produkt_PR = filter_var($request->produkt_PR,FILTER_SANITIZE_STRING);
            $retchsschutzP->status_PR = filter_var($request->status_PR,FILTER_SANITIZE_STRING);
            $retchsschutzP->last_adjustment_PR = filter_var($request->last_adjustment_PR,FILTER_SANITIZE_STRING);
            $retchsschutzP->total_commisions_PR = filter_var($request->total_commisions_PR,FILTER_SANITIZE_STRING);

            if($request->status_PR == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $vorsorgeP->person_id_PV = filter_var($id,FILTER_SANITIZE_STRING);
            $vorsorgeP->graduation_date_PV = filter_var($request->graduation_date_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->begin_PV = filter_var($request->begin_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->society_PV = filter_var($request->society_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->pramie_PV = filter_var($request->pramie_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->payment_rythm_PV = filter_var($request->payment_rythm_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->duration_from_PV = filter_var($request->duration_from_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->duration_to_PV = filter_var($request->duration_to_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->production_PV = filter_var($request->production_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->status_PV = filter_var($request->status_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->last_adjustment_PV = filter_var($request->last_adjustment_PV,FILTER_SANITIZE_STRING);
            $vorsorgeP->total_commisions_PV = filter_var($request->total_commisions_PV,FILTER_SANITIZE_STRING);

            if($request->status_PV == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }

            $autoversicherungP->person_id_PA = filter_var($id,FILTER_SANITIZE_STRING);
            $autoversicherungP->society_PA = filter_var($request->society_PA,FILTER_SANITIZE_STRING);
            $autoversicherungP->beginning_insurance_PA = filter_var($request->beginning_insurance_PA,FILTER_SANITIZE_STRING);
            $autoversicherungP->insurance_PA = filter_var($request->insurance_PA,FILTER_SANITIZE_STRING);
            $autoversicherungP->status_PA = filter_var($request->status_PA,FILTER_SANITIZE_STRING);
            $autoversicherungP->last_adjustment_PA = filter_var($request->last_adjustment_PA,FILTER_SANITIZE_STRING);
            $autoversicherungP->total_commisions_PA = filter_var($request->total_commisions_PA,FILTER_SANITIZE_STRING);

            if($request->status_PA == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }
            $hausratP->person_id_PH = filter_var($id,FILTER_SANITIZE_STRING);
            $hausratP->society_PH = filter_var($request->society_PH,FILTER_SANITIZE_STRING);
            $hausratP->beginning_insurance_PH = filter_var($request->beginning_insurance_PH,FILTER_SANITIZE_STRING);
            $hausratP->insurance_PH = filter_var($request->insurance_PH,FILTER_SANITIZE_STRING);
            $hausratP->status_PH = filter_var($request->status_PH,FILTER_SANITIZE_STRING);
            $hausratP->last_adjustment_PH = filter_var($request->last_adjustment_PH,FILTER_SANITIZE_STRING);
            $hausratP->total_commisions_PH = filter_var($request->total_commisions_PH,FILTER_SANITIZE_STRING);

            if($request->status_PH == 'Provisionert'){
                $familyperson = family::find($id)->lead->assign_to_id;
                $url = '<a href="' . route("costumer_form",[Crypt::encrypt($id * 1244)]) . '"> Ihr Kunde :' . family::find($id)->first_name . ' wurde bereitgestellt </a>';
                Admins::find($familyperson)->notify(new SendNotificationn($url));
            }



        $cnt =  newnue::where('person_id',$id)->count() +1;
        $pcnt = 0;
        for ($i = 1; $i <= $cnt; $i++) {
            $zusatzversicherungP = new CostumerProduktZusatzversicherung();
            $zusatzversicherungP->person_id_PZ = $id;

                $zusatzversicherungP->graduation_date_PZ = filter_var($request->input('graduation_date_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->society_PZ = filter_var($request->input('society_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->produkt_PZ = filter_var($request->input('produkt_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->vvg_premium_PZ = filter_var($request->input('vvg_premium_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->duration_from_PZ = filter_var($request->input('duration_from_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->duration_to_PZ = filter_var($request->input('duration_to_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->status_PZ = filter_var($request->input('status_PZ' . $i),FILTER_SANITIZE_STRING);
                $zusatzversicherungP->last_adjustment_PZ = filter_var($request->input('last_adjustment_PZ' . $i),FILTER_SANITIZE_STRING);
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
            return redirect()->route('costumers')->with('success', 'Aktion erfolgreich durchgeführt');
        }else{
            return redirect()->back()->with('fail', 'Aktion nicht erledigt');
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

        return redirect()->route('costumers')->with('success' , 'Ihre Änderungen wurden erfolgreich durchgeführt');



    }

}
