<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\RegisterRequest;


class PostController extends Controller
{

    public function postLogin(Request $request){
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials)){
         return view('welcome');
        }
        else{
            return redirect()->back();
        }
    }

    public function postRegister(RegisterRequest $request){
        $user=new User();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->password=Hash::make($request->password);
          $user->save();
          return view('login');
      }
  
}
