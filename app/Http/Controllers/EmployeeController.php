<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $req){
        $emp =new Employee();
        $emp->emp_name =$req->name;
        $emp->emp_email =$req->email;
        $emp->emp_message =$req->message;

        $emp->save();

        return redirect("/getemployee");
    }

    public function getEmployee(){
        $emp =new Employee();

        $data = $emp::all();
        return view("getEmployee",compact("data"));
    }
}
