<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class FahadsController extends Controller
{
    public function show()
    {
    	$employees = Employee::all();
    	return view("employees.show",compact('employees'));
    }
}
