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

    public function editEmployee($id){
        $emp = new Employee();
        $data = $emp::find($id);

        return view("editemployee", compact("data"));
    }

        public function editingEmployee(Request $req, $id){
        $emp = Employee::find($id);

        $emp->emp_name = $req->name;
        $emp->emp_email = $req->email;
        $emp->emp_message = $req->message;

        $emp->save();

        return redirect("/getemployee");
    }

    public function deleteEmployee($id){
        $emp =Employee::find($id);

        $emp->delete();

        return redirect("/getemployee");
    }
}
