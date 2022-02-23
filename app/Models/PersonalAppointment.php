<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAppointment extends Model
{
    use HasFactory;
    public $table = 'personalappointment';

    public function Admins(){
        return $this->belongsTo(Admins::class,'id');
    }
}
