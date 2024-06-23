<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index() : View{
        return view('employees/index.blade.php');
    }
    public function create() : View{
        return view('employees/create.blade.php');
    }
}
