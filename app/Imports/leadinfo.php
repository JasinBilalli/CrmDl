<?php

namespace App\Imports;

use App\Models\lead_info;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\lead;
use Maatwebsite\Excel\Concerns\ToModel;

class leadinfo implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $lead = lead::where('first_name',$row[0])->where('last_name',$row[1])->where('birthdate',$row[3])->latest()->first();
      

        return new lead_info([
            'lead_id' => $lead->id,
            'kampagne' => $row[7],
            'grund' => $row[8],
            'krankenkasse' => $row[9],
            'bewertung' => $row[10],
            'wichtig' => $row[11],
        ]);

   

        
    }
}
