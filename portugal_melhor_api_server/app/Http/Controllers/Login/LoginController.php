<?php

namespace App\Http\Controllers\Login;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Worker;

class LoginController extends Controller
{
    public function login(Request $req){
      $data = $req->all();
      $worker = Worker::loginCheck($data['email_worker'],$data['password_worker']);
      if(count($worker)>0){
        return Response::json($worker, 200);
      }
      return Response::json(['response' =>'login-error'], 400);
    }

    public function teste(){
     	return Response::json(['response' =>'login-error'], 400);
    }
}
