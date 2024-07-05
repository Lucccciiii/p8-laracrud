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
        $employee = new Employee([
            'Name' => request('name'),
            'Password' => request('password'),
            'Email' => request('email'),
            'Salary' => request('salary'),
            'Job' => request('job'),]);
        $employee->save();
        return redirect('/employees.index');
    }
    public function show($id): View
    {
        $data = Employee::fir();
        return view('/employees.show', compact('data'));
    }
}
