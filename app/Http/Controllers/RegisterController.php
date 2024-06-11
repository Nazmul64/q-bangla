<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function sponsor_id(Request $request){
       $sponsor_id =$request->sponsor_id;
       $check =User::where(['user_name' => $sponsor_id, 'status' => 1])->exists();
       if($check){
        $data= User::where(['user_name' => $sponsor_id, 'status' => 1])->first();
        echo $data->name;
       }else{
         echo "0";
       }
  }
}
