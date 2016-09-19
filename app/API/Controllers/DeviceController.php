<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 16/06/2016
 * Time: 18:15
 */

namespace App\API\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Dingo\Api\Routing\Helpers;
use App\User;
use App\Device;
use Validator;
use Dingo\Api\Http\Request;
use Response;

class DeviceController extends BaseController
{

    use Helpers;

    public function getDevices($ukey){
        $user = User::where('ukey',$ukey)->with(['country','devices'])->first();

            if(count($user) < 1){
                return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
            }else {
                return $user;
            }
    }

    public function getDevice($ukey,$dkey){
        $device = Device::where('dkey',$dkey)->with(['user'=>function($query) use ($ukey){
            $query->where('ukey','=',$ukey);
        }])->first();
        if(!is_null($device)) {
            if (is_null($device->user)) {
                //return ['code'=>1,'error' => 'Chave de usuário incorreta ou usuário inexistente!'];
                return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
            }else{
                return $device;
            }
        }else{
            return $this->response->errorBadRequest('Chave de Dispositivo incorreta ou dispositivo inexistente!');
        }
    }

    public function createDevice($ukey,Request $request){
        $user = User::where('ukey',$ukey)->first();
        if(is_null($user)){
            return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
        }else{
            $data = $request->all();

            $messages  = [
                'required' => 'O campo :attribute é obrigatório',
                'max'       => 'O campo :attribute deve ter no máximo :max caracteres'
            ];

            $rules = [
                'name'  =>'required|max:60',
            ];

            $validator = Validator::make($data,$rules,$messages);
            if($validator->fails()){
                return Response::json(['errors'=>$validator->errors()->all(),'status_code'=>400],400);
            }else{
                $data['user_id'] = $user->id;
                $data['dkey'] = str_random(60);
                if($device = Device::create($data)){
                    return $device;
                }else{
                    return $this->response->errorBadRequest('Não foi possivel criar o dispositivo!');
                }
            }
        }
    }

    public function deleteDevice($ukey,$dkey){
        //hksWhVHFEVqPQUR68n6hOER8UrfhvPztUuZlthKQhRWmMgzsBxyWsYWXXXzW
        $user = User::where('ukey',$ukey)->first();
        if(is_null($user)) {
            return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
        }else{
            $device = $user->devices()->where('dkey',$dkey)->first();
            if(!is_null($device)) {
                try{
                    $device->delete();
                    return ['message'=>'Dispositivo Excluido','status_code'=>'200'];
                }catch(QueryException $e){
                    if($e->getCode() == 23000){
                        return $this->response->errorInternal('Não foi possivel excluir este dispositivo pois ele já transmitiu dados!');
                    }
                    return $this->response->errorBadRequest($e->getMessage());

                }
            }else{
                return $this->response->errorBadRequest('Chaves informadas estão incorretas ou dispositivo inexistente!');
            }
        }
    }

    public function editDevice($ukey,$dkey,Request $request){
        $user = User::where('ukey',$ukey)->first();
        if(is_null($user)) {
            return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
        }else{
            $data = $request->all();

            $messages  = [
                'required' => 'O campo :attribute é obrigatório',
                'max'       => 'O campo :attribute deve ter no máximo :max caracteres'
            ];

            $rules = [
                'name'  =>'required|max:60',
            ];

            $validator = Validator::make($data,$rules,$messages);
            if($validator->fails()){
                return Response::json(['errors'=>$validator->errors()->all(),'status_code'=>400],400);
            }else{
                $device = $user->devices()->where('dkey',$dkey)->first();
                try{
                    $device->update($data);
                    return $device;
                }catch(QueryException $e){
                    return $this->response->errorBadRequest($e->getMessage());
                }
            }
        }
    }
}