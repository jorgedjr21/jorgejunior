<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Device;
use App\Http\Requests;

class DeviceController extends Controller
{
    //

    public function index(){
        $user = Auth::user();
        $devices = $user->devices()->paginate(10);
        return view('dashboard/device_index',['user'=>$user,'devices'=>$devices]);
    }

    public function newDevice(){

        //TODO
        $user = Auth::user();

        return view('dashboard/device_new',['user'=>$user]);
    }

    public function saveDevice(Request $request){
        $user = Auth::user();
        $data = $request->all();

        $messages  = [
            'required' => 'O campo :attribute é obrigatório',
            'max'       => 'O campo :attribute deve ter no máximo :max caracteres'
        ];

        $rules = [
            'name'  =>'required|max:60',
        ];

        $customAttributes = [
            'name' => 'Nome do Dispositivo',
        ];
        $validator = Validator::make($data,$rules,$messages,$customAttributes);
        if($validator->fails()){
            return redirect('/devices/new')->withErrors($validator)->withInput();
        }else{
            $data['user_id'] = $user->id;
            $data['dkey'] = str_random(60);
            if(Device::create($data)){
                return redirect('/devices')->with('success','Cadastro realizado com sucesso!');
            }else{
                return redirect('/devices/new')->with('error','Não foi possivel realizar o cadastro, tente novamente!');
            }
        }
    }

    public function editForm($device_id){
        $user = Auth::user();
        $device = $user->devices($device_id)->first();

        return view('dashboard/device_edit',['user'=>$user,'device'=>$device]);
    }

    public function saveEdit($device_id, Request $request){
        $user = Auth::user();
        $data = $request->all();

        $device = $user->devices($device_id)->first();
        $messages  = [
            'required' => 'O campo :attribute é obrigatório',
            'max'       => 'O campo :attribute deve ter no máximo :max caracteres'
        ];

        $rules = [
            'name'  =>'required|max:60',
        ];

        $customAttributes = [
            'name' => 'Nome do Dispositivo',
        ];
        $validator = Validator::make($data,$rules,$messages,$customAttributes);
        if($validator->fails()){
            return redirect('/devices/'.$device_id.'/edit')->withErrors($validator)->withInput();
        }else{
            $device->name = $data['name'];
            $device->description = $data['description'];
            if($device->save()){
                return redirect('/devices')->with('success','Edição do dispositivo realizada com sucesso!');
            }else{
                return redirect('/devices/'.$device_id.'/edit')->with('error','Não foi possivel realizar o cadastro, tente novamente!');
            }
        }
    }

    public function delete($device_id,Request $request){
        $device = Device::find($device_id);
        try{
            $device->delete();
            return redirect('/devices')->with('success','Dispositivo removido com sucesso!');
        }catch(QueryException $e){
            return redirect('/devices')->with('error',"Não foi possivel excluir o dispositivo, verifique se ele já transmitiu dados antes de exclui-lo!");
        }
        /*if($device->delete()){
            return redirect('/devices')->with('success','Dispositivo removido com sucesso!');
        }else{
            return redirect('/devices')->with('error','Não foi possivel deletar o dispositivo, tente novamente!');
        }*/
    }
}
