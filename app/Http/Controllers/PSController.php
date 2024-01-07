<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\lates;
use Illuminate\Http\Request;

class PSController extends Controller
{
    public function index()
    {
        $students = students::all();
        return view('Students.ps.index', compact('students'));
    }
    public function index2(){
        $lates = lates::all();
        return view('Late.ps.index', compact('lates'));
    }
    public function show(){
        $lates = lates::all();
        $students = students::all();
        return view('Late.ps.show', compact('students', 'lates'));
    }
}
