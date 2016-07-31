<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use Auth;
use Validator;
use App\Http\Requests;

class StreamController extends Controller
{
    //

    public function getStreams($device_id){
        $user = Auth::user();
        $device = Device::find($device_id);
        $streams = $device->streams()->paginate(15);

        return view('dashboard.device_getstreams',['user'=>$user,'device'=>$device,'streams'=>$streams]);
    }
}
