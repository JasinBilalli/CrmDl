<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankInformation extends Model
{
    use HasFactory;

    protected $table = 'bank_information';

    protected $fillable = [
        'employee_id',
        'bank',
        'iban'
    ];
}
