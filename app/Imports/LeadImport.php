<?php

namespace App\Imports;

use App\Models\Admins;
use App\Models\campaigns;
use App\Models\lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Carbon;
use Throwable;
use Illuminate\Support\Facades\Auth;

class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $latitude,$longitude;

public function niorz(){
    if(Auth::user()->hasRole('fs')) return 1;
    else return 0;
}

public function author(){
    if(Auth::user()->hasRole('fs')) return Auth::user()->id;
    else return null;
}
    public function latitudee($address1){
        try{
        $address = $address1;
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyDscxZzYju_pJGNA2zu1lXOqJuubCdPu0o';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($responseJson);
        if ($response->status == 'OK') {
            $latitude = $response->results[0]->geometry->location->lat;
            $longitude = $response->results[0]->geometry->location->lng;
        }
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    catch(Throwable $e){
       $this->longitude = 0.00;
       $this->latitude = 0.00;
    }
    }

    public function model(array $row)
    {
        $this->latitudee($row[18]);

        return new lead([
         'created_at' => $row[1],
         'updated_at' =>  $row[2],
         'agent' => $row[4],
         'berater' => $row[6],
         'appointment_date' => Carbon::parse($row[8])->format('Y-m-d'),
         'time' => $row[9],
         'sprache' => $row[10],
         'number_of_persons' => $row[11],
         'nationality' => $row[12],
         'first_name' => $row[13],
         'last_name' => $row[14],
         'address' => $row[17] . $row[18],
         'postal_code' => $row[17],
         'city' => $row[18],
         'telephone' => $row[19],
         'bemerkung' => $row[58],
         'assigned' => $this->niorz(),
         'campaign_id' => 1,
         'assign_to_id' => $this->author(),
         'latitude' => $this->latitude,
         'longitude' => $this->longitude
        ]);
    }
}
