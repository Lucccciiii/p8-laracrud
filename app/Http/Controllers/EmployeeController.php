<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $data = Employee::all();
        return view('employees.index', compact('data'));
    }

    public function create(): View
    {
        return view('employees.create');
    }

    public function store(request $request): RedirectResponse
    {
        $employee = new Employee();
        $employee->name = $request->name;
        Employee::create([
            'name' => request('name'),
            'password' => request('password'),
            'email' => request('email'),
            'salary' => request('salary'),
            'job' => request('job'),]);
        return redirect('/employees.index');
    }
    public function show(id $id) :RedirectResponse
    {
        $data = Employee::where('id',$id)->get();
        return view('/employees.show', compact('data'));
    }
}
