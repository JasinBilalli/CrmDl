<?php

namespace App\Imports;

use App\Models\campaigns;
use App\Models\family;
use App\Models\lead;
use App\Models\LeadDataFahrzeug;
use App\Models\LeadDataKK;
use App\Models\LeadDataPrevention;
use App\Models\newgegen;
use App\Models\newnue;
use App\Models\Pendency;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class CostumerImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

    }

    public function model(array $row){

        $lead = new lead();
        $lead->assign_to_id = Auth::user()->id;
        $lead->first_name = $row[0];
        $lead->last_name = $row[1];
        $lead->telephone = '';

        $lead->campaign_id = 1;
//        $lead->first_name = '';
        $lead->first_name = '';
        $lead->completed = 1;
        $lead->save();
$family = family::create([
    'first_name' => $row[0],
    'last_name' => $row[1],
    'birthdate' => $row[2],
    'leads_id' => $lead->id,
    'status' => 'done'

]);
$pendency = new Pendency();
$pendency->done = 1;
$pendency->completed = 1;
$pendency->admin_id = Auth::user()->id;
$pendency->family_id = $family->id;
$pendency->save();
        $dataKK = new LeadDataKK();
        $dataKK->person_id = $family->id;
        $dataKK->leads_id = $lead->id;

        $dataFahrzeug = new LeadDataFahrzeug();
        $dataFahrzeug->person_id = $family->id;
        $dataFahrzeug->leads_id = $lead->id;

        $dataPrevention = new LeadDataPrevention();
        $dataPrevention->person_id = $family->id;
        $dataPrevention->leads_id = $lead->id;

        $dataPrevention->save();
        $dataFahrzeug->save();
        $dataKK->save();

        return $family;


    }
}
