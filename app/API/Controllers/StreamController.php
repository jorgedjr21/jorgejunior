<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 16/06/2016
 * Time: 18:15
 */

namespace App\API\Controllers;

use Dingo\Api\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Dingo\Api\Routing\Helpers;
use App\Device;
use App\Stream;
use Validator;
use Response;

class StreamController extends BaseController
{

    use Helpers;

    public function getStream($ukey,$dkey){
        $device = Device::with(['user'=>function($query) use($ukey){
            $query->where('ukey',$ukey);
        }])->where('dkey',$dkey)->first();

        if(!is_null($device) && !is_null($device->user)) {
            return $device->streams;
        }else {
            return $this->response->errorBadRequest('As chaves fornecidas estão incorretas, por favor, tente novamente');
        }
    }

    public function saveStream($ukey,$dkey, Request $request){
        $device = Device::with(['user'=>function($query) use($ukey){
            $query->where('ukey',$ukey);
        }])->where('dkey',$dkey)->first();

        if(!is_null($device) && !is_null($device->user)){
            $data = $request->all();

            $messages  = [
                'required' => 'O campo :attribute é obrigatório',
            ];

            $rules = [
                'data'  =>'required',
            ];

            $validator = Validator::make($data,$rules,$messages);
            if($validator->fails()){
                return Response::json(['errors'=>$validator->errors()->all(),'status_code'=>400],400);
            }else {
                $data['device_id'] = $device->id;
                $stream = Stream::create($data);
                return $stream;
            }
        }else{
            return $this->response->errorBadRequest('As chaves fornecidas estão incorretas, por favor, tente novamente');
        }
    }

    public function getLast($ukey,$dkey){
        $device = Device::with(['user'=>function($query) use($ukey){
            $query->where('ukey',$ukey);
        }])->where('dkey',$dkey)->first();



        if(!is_null($device) && !is_null($device->user)){
            return Stream::orderBy('created_at','desc')->first();
        }else{
            return $this->response->errorBadRequest('As chaves fornecidas estão incorretas, por favor, tente novamente');
        }
    }
}