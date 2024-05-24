<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        dd($employees);
    }
   
}