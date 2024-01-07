<?php

namespace App\Http\Controllers;

use App\Models\lates;
use App\Models\students;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = students::all();
        $lates = lates::all();
        return view('Late.admin.index', compact('students', 'lates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = students::all();
        return view('Late.admin.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id'=>'required',
            'date_time_late'=>'required',
            'information'=>'required',
            'bukti' => 'required|image|max:2048',
        ]);
    
        $imagePath = $request->file('bukti')->store('public/images');
    
        lates::create([
            'student_id'=>$request->student_id,
            'date_time_late'=>$request->date_time_late,
            'information'=>$request->information,
            'bukti'=>$imagePath,
        ]);
    
        return redirect()->route('late.index')->with('success','data berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(lates $lates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lates $lates, $id)
    {
        $lates = lates::find($id);
        $students = students::all();
        return view('Late.admin.edit', compact('students', 'lates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $lates = lates::findOrFail($id); // Fetch the specific late entry by ID
    
        $request->validate([
            'student_id' => 'required',
            'date_time_late' => 'required',
            'information' => 'required',
            'bukti' => 'image|max:2048',
        ]);
    
        if ($request->hasFile('bukti')) {
            $image_path = public_path("storage/" . $lates->bukti);
    
            if (File::exists($image_path)) {
                unlink($image_path);
            }
    
            $imagePath = $request->file('bukti')->store('public/images');
            $lates->bukti = $imagePath;
        }
    
        $lates->student_id = $request->student_id;
        $lates->date_time_late = $request->date_time_late;
        $lates->information = $request->information;
    
        $lates->save();
    
        return redirect()->route('late.index')->with('success', 'Data berhasil diupdate');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lates $lates, $id)
    {
        lates::where('id', $id)->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
