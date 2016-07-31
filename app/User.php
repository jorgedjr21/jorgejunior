<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','ukey','country_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id','country_id','password', 'remember_token',
    ];

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function devices(){
        return $this->hasMany('App\Device');
    }
}
