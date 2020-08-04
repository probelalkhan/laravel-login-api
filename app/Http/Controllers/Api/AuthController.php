<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login(){
        echo "Login Endpoint Requested";
    }

    public function signup(){
        echo "Signup Endpoint Requested";
    }

    public function index(){
        echo "Hello World";
    }

}
