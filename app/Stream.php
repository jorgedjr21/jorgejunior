<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    //
    protected $table = 'streams';
    protected $fillable = ['device_id','data'];

    public function device(){
        return $this->belongsTo('App\Device');
    }
}
