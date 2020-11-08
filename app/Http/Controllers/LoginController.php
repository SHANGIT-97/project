<?php

namespace App\Http\Controllers;

use App\models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Enter/index');
    }

    public function create(){
        return view('Enter/logto');
    }

    public function register(){
        return view('Enter/regto');
    }

    public function gohome(){
        return view('Enter/gohome');
    }
    
}

