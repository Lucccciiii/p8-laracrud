<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['Name', 'Password', 'Email', 'Salary', 'Job'];
    use HasFactory;
}
