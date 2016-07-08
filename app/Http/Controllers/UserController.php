<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Country;

class UserController extends Controller
{
    //


    public function loginpage(){
        return view('tfg_base/login');
    }

    public function login(Request $request){

        $remember = false;
        if($request->has('remember'))
            $remember = true;


        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember)){
            return redirect()->intended('dashboard');
        }else {
            dd($request->all());
        }
    }


    public function registerpage(){
        $countries = Country::where('avaible',1)->get();

        return view('tfg_base/register',['countries'=>$countries]);
    }

    public function register(Request $request){
        dd($request->all());
    }
    public function dashboard(){
        return view('dashboard/index');
    }
}
