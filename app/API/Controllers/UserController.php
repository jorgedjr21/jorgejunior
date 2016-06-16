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


class UserController extends BaseController
{


    public function show($user_id){
        return ['user_id'=>$user_id];
    }
}