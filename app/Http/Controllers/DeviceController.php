<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Device;
use App\Http\Requests;

class DeviceController extends Controller
{
    //

    public function index(){
        $user = Auth::user();
        $devices = Device::paginate(10);
        return view('dashboard/device_index',['user'=>$user,'devices'=>$devices]);
    }

    public function newDevice(){

        //TODO
        $user = Auth::user();
    }
}
