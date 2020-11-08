<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use App\Models\Register;

use Illuminate\Http\Request;

class RegisterContoller extends Controller
{
    public function store(Request $request){

        $register=new Register;

       $request->validate([ 
            'ID'=>'required',
            'Username'=>'required',
            'Password'=>'required'
             
       ]);
       
       $query=DB::table('logins')->insert([
            'ID'=>$request->input('ID'),
            'Username'=>$request->input('Username'),
            'Password'=>$request->input('Password')
          
       ]);
         
    }
        
}
