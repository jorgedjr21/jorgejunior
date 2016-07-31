<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $table = 'devices';
    protected $fillable = ['user_id','name','dkey','description'];
    protected $hidden = [
        'id','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function streams(){
        return $this->hasMany('App\Stream');
    }
}
