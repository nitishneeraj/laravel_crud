<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $data['employees'] = Employee::orderBy('id', 'desc')->simplePaginate(10);
        return view('employee.list', $data);
    }
   
}