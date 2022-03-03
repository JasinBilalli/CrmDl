<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    public $counter,$fahrzeug,$datakk,$prevention,$things;
    public function __construct($counter)
    {
        $this->counter = $counter;
    }
     public function getdata($id){
      
     }
     public function addanother(){
         $this->counter = $this->counter . 'a';
     }

}
