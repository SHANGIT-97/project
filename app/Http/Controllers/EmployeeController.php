<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{ 
     public function index(){
          return view('User/adduser');
     }

     public function view(){
          return view('User/saveuser');
     }

    public function store(Request $request){

        $employee=new Employee;

       $request->validate([
            'EmpID'=>'required',
            'name'=>'required',
            'salary'=>'required',
            'email'=>'required',
            'mobileNo'=>'required',
            'address'=>'required',
            'EmpType'=>'required' 
       ]) ;
       
       $query=DB::table('employees')->insert([
            'EmpID'=>$request->input(''),
            'name'=>$request->input('name'),
            'salary'=>$request->input('salary'),
            'email'=>$request->input('email'),
            'mobileNo'=>$request->input('mobileNo'),
            'address'=>$request->input('address'),
            'EmpType'=>$request->input('EmpType')
       ]);
        $data=Employee::all();
       
           return view('User/saveuser')->with('employees',$data);

       
      
    }
        
}
  