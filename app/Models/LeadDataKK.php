<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDataKK extends Model
{
    use HasFactory;

    protected $table = 'lead_data_kk';

    protected $fillable = [
        'leads_id',
        'person_id',
        'pre_insurer',
        'id_required',
        'notice_by',
        'power_of_attorney',
        'vorversicherer_select',
        'id_notwending_select',
        'kundingung_durch_select',
        'vollmacht_select'

    ];
}
