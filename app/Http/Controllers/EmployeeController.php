<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $result =  Employee::all();
        return view('employees')->withdata($result);
    }
}
