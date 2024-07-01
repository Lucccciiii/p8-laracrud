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
        Employee::create([
            'name' => request('name'),
            'password' => request('password'),
            'email' => request('email'),
            'salary' => request('salary'),
            'job' => request('job'),]);
       /* $post = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|max:255',
            'email' => 'required|max:255|email:rfd,dns',
            'salary' => 'required',
            'job' => 'required|max:255'
        ]);
        if($post->fails()){
            return view('employees.create');
        }
        else{
            $post::create([
                'name' => $post('name'),
                'password' => $post('password'),
                'email' => $post('email'),
                'salary' => $post('salary'),
                'job' => $post('job'),
            ]);
            $name = $post->input('name');
            $passhashed = Hash::make('password', ['rounds' => 12,]);
            $email = $post->input('email');
            $salary = $post->input('salary');
            $job = $post->input('job');
            $data = array('Name'=> $name,'Password'=>$passhashed, 'Email'=> $email,'Salary' => $salary, 'job' => $job);
            DB::table('Employees')->insert($data);
        return redirect('/employees.index');
        }*/
    }
}
