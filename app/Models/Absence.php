<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $table = 'absences';
    protected $dates = ['from', 'to'];

    protected $fillable = [
        'employee_id',
        'from',
        'to',
        'type',
        'description'
    ];
}
