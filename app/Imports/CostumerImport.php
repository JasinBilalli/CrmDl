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
  

    public function model(array $row){
    
       $lead =  lead::create(['assign_to_id' =>Auth::user()->id,
         'first_name' => "",
         'last_name' => "",
         'campaign_id' => 1,
         'completed' => 1,
         'birthdate' => $row[2],
         'telephone' => $row[3],
         'address' => $row[4],
         'city' => $row[5],
         'postal_code' => $row[6],
         'nationality' => $row[7]
         ]);
     
$family = family::create([
    'first_name' => $row[0],
    'last_name' => $row[1],
    'birthdate' => $row[2],
    'leads_id' => $lead->id,
    'status' => 'done'
]);

        $dataKK = new LeadDataKK();
        $dataKK->person_id = $family->id;
        $dataKK->imported = 1;
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
       $pendency = new Pendency();
       $pendency->done = 1;
       $pendency->completed = 1;
       $pendency->family_id = $family->id;
       $pendency->save();
        return $family;


    }
}
