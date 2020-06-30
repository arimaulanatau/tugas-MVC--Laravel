<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        $this->validate($request,[
            'fname' => '',
            'lname' => ''

        ]);
        return view('welcome',['data'=>$request]);
    }
}
