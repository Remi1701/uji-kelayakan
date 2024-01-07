<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\rayons;
use App\Models\rombels;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = students::all();
        $rayon = rayons::all();
        $rombels = rombels::all();
        return view('Students.admin.index', compact('rayon','rombels','students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = students::all();
        $rayon = rayons::all();
        $rombel = rombels::all();
        return view('Students.admin.create', compact('rayon', 'rombel', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'name' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required',
        ]);

        students::create([
            'nis'=>$request->nis,
            'name'=>$request->name,
            'rombel_id'=>$request->rombel_id,
            'rayon_id'=>$request->rayon_id,
        ]);

        return redirect()->route('student.index')->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = students::find($id);
        $rombel = rombels::all();
        $rayon = rayons::all();
        return view('Students.admin.edit', compact('rayon', 'students', 'rombel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis'=>'required',
            'name' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required',
        ]);

        students::where('id', $id)->update([
            'nis'=>$request->nis,
            'name'=>$request->name,
            'rombel_id'=>$request->rombel_id,
            'rayon_id'=>$request->rayon_id,
        ]);

        return redirect()->route('student.index')->with('success','data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        students::where('id', $id)->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
