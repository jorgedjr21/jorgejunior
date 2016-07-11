<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Country;
use Validator;
use App\User;
use Hash;

class UserController extends Controller
{
    //

    public function welcomepage(){
        $user = null;
        if(Auth::check()){
            $user = Auth::user();
        }
        return view('tfg_base/welcome',['user'=>$user]);
    }


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
            return redirect('/login')->with('error','Email ou senha incorretos, por favor, tente novamente!');
        }
    }


    public function registerpage(){
        $countries = Country::where('avaible',1)->get();

        return view('tfg_base/register',['countries'=>$countries]);
    }

    public function register(Request $request){
        //dd($request->all());
        $messages  = [
            'required' => 'O campo :attribute é obrigatório',
            'same'     => 'O campo :attribute deve ser igual ao campo :other',
            'email'    => 'O campo :attribute deve ser um email',
        ];

        $rules = [
            'name'  =>'required',
            'email' => 'required|email',
            'password' => 'required|same:check_password',
            'check_password' => 'required|same:password',
            'country_id'    => 'required'
        ];

        $customAttributes = [
            'name' => 'Nome',
            'email' => 'Email',
            'password' => 'Senha',
            'check_password' => 'Confirmação senha',
        ];
        $validator = Validator::make($request->all(),$rules,$messages,$customAttributes);

        if($validator->fails()){
            return redirect('/register')->withErrors($validator)->withInput();
        }else{
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $data['ukey'] = str_random(60);
            if(User::create($data)){
                return redirect('/register')->with('success','Cadastro realizado com sucesso!');
            }else{
                return redirect('/register')->with('error','Não foi possivel realizar o cadastro, tente novamente!');
            }
        }

    }
    public function dashboard(){
        $user = Auth::user();
        return view('dashboard/index',['user'=>$user]);
    }

    public function profile(){
        $user = Auth::user();
        
        return view('dashboard/profile',['user'=>$user]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
