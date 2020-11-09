<?php

namespace App\Http\Controllers;

use App\Models\Login;
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
        return view('Enter.add');
   }

    public function view(){

        $devices = Device::all();

        return view('devices.index',compact('devices'));
    }

    public function save(){
        return view('devices.create');
    }

    public function add(){

        $login = new Login();

        $login->ID = request('ID');
        $login->Username = request('Username');
        $login->Password = request('Password');

        $device->save();

        

    }

    
    
    
}

