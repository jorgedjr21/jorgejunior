<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $table = 'devices';
    protected $fillable = ['user_id','name','dkey','description'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
