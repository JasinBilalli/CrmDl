<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Musonza\Chat\Traits\Messageable;


class Admins extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles, Messageable;

    protected $guard_name = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'pin',
        'phonenumber',
        'confirmed',
        'firsttime',
        'created_at',
        'updated_at',
        'email_verified_at'
    ];
public function headadmin(){
    return $this->belongsTo(Admins::class,'admin_id');
}
    public function leads(){
        return $this->hasMany(lead::class,'assign_to_id');
    }
    public function pendencies(){
        return $this->hasMany(Pendency::class,'admin_id');
    }
    public function personaldata(){
    return $this->belongsTo(EmployeePersonalData::class,'admin_id');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
 protected $guarded = [];
}
