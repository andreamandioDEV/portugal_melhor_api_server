<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Worker extends Model
{
    public static function loginCheck($email, $password){
    	$worker = DB::table('workers')
                  ->where('email_worker', '=' ,$email)
                  ->where('password_worker', '=' ,$password)
                  ->get();
  		return $worker;
    }
}
