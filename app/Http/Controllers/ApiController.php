<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 2:38 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Response as IlluminateReponse;


class ApiController extends Controller
{
    protected $statusCode = IlluminateReponse::HTTP_OK;

    public function getStatusCode(){
        return $this->statusCode;
    }

    public function setStatusCode($statusCode){
        $this->$statusCode = $statusCode;
        return $this;
    }

    public function respond($data, $headers = []){
        return response()->json($data, $this->getStatusCode(), $headers);
    }
}