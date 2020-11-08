<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function store(Request $request){
       $user=new User;

       $user->EmpID=$request->EmpId;
       $user->name=$request->name;
       $user->salary=$request->salary;
       $user->email=$request->email;
       $user->mobileNo=$request->mobileNo;
       $user->address=$request->address;
       $user->EmpType=$request->EmpType;
       
   } 
}
