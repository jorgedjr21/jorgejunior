<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //


    public function loginpage(){
        return view('login');
    }

    public function login(Request $request){
        dd($request->all());
    }
}
