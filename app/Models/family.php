<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    protected $table = 'family_person';
    public $datas;
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'leads_id',
        'status'
    ];
    public function pendency(){
return $this->belongsTo(Pendency::class,'id','family_id');
    }

    public function lead()
    {
        return $this->belongsTo(lead::class, 'leads_id');
    }
    public function datacounter()
    {
        return $this->hasMany(datacounter::class, 'person_id');
    }
    public function datak()
    {
        return $this->hasMany(datak::class, 'person_id');
    }
    public function datas()
    {
        return $this->hasMany(datas::class, 'person_id');
    }
    public function datafah()
    {
        return $this->hasMany(datasfah::class, 'person_id');
    }
    public function datasw()
    {
        return $this->hasMany(datasw::class, 'person_id');
    }
}
