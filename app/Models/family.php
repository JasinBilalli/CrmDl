<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    protected $table = 'family_person';
    public $datas;
    use HasFactory;

    protected $guarded = [];
    public function pendency(){
return $this->belongsTo(Pendency::class,'id','family_id');
    }
    public function df(){
        return $this->belongsTo(LeadDataFahrzeug::class,'person_id');
    }
    public function hausrat(){
        return $this->belongsTo(CostumerProduktHausrat::class,'person_id');
    }

    public function grund(){
        return $this->hasMany(CostumerProduktGrundversicherung::class,'person_id_PG');
    }
    public function rech(){
        return $this->hasMany(CostumerProduktRechtsschutz::class,'person_id_PR');
    }
    public function vor(){
        return $this->hasMany(CostumerProduktVorsorge::class,'person_id_PV');
    }
    public function zus(){
        return $this->hasMany(CostumerProduktZusatzversicherung::class,'person_id_PZ');
    }
    public function auto(){
        return $this->hasMany(CostumerProduktAutoversicherung::class,'person_id_PA');
    }
    public function lead()
    {
        return $this->belongsTo(lead::class, 'leads_id');
    }
    public function datacounter()
    {
        return $this->hasMany(datacounter::class, 'person_id');
    }
    public function adminpend(){
        return $this->belongsTo(Admins::class,'admin_id');
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
