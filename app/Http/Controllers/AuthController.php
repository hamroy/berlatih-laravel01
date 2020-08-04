<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register($value='')
    {
    	return view('register');
    }

    public function welcome(Request $request)
    {
    	$nama=$request['fname'].' '.$request['lname'];
    	$data=[
    		"nama"=>$nama,
    	];
    	// return view('welcome',compact("nama"));
    	return view('welcome',$data);
    }
}
