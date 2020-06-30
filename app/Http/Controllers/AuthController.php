<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function welcome(){
    	return view ('welcome');
    }

    public function welcome_post(Request $request){
    	$first_name = $request["firstname"];
    	$last_name = $request ["lastname"];
    	return view('welcome', ["first_name" => $first_name, "last_name" => $last_name]);
    }
}



