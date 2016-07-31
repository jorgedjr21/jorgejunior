<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 16/06/2016
 * Time: 18:15
 */

namespace App\API\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Dingo\Api\Routing\Helpers;
use App\User;
use App\Device;

class DeviceController extends BaseController
{

    use Helpers;

    public function getDevices($ukey){
        $user = User::where('ukey',$ukey)->with(['country','devices'])->first();

            if(count($user) < 1){
                //return ['code'=>'1','error'=>'Chave de usuário incorreta ou usuário inexistente!'];
                return $this->response->errorBadRequest('Chave de usuário incorreta ou usuário inexistente!');
            }else {
                return $user;
            }
    }

    public function getDevice($ukey,$dkey){
        /*$user = User::where('ukey',$ukey)->with(['country','devices'=>function($query) use ($dkey){
            $query->where('dkey','=',$dkey);
        }])->first();

        if(count($user) < 1){
            return ['code'=>'1','error'=>'Nenhum usuário com esse código existe!'];
        }else {
            return $user;
        }*/
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
}