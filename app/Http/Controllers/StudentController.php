<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->city = $request->city;
        $students->save();
        return redirect('show-students');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Student::all();
        return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $students = Student::find($id);

        return view('students.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $students = Student::find($id);
        $students->name = $request->name;
        $students->email = $request->email;
        $students->city = $request->city;
        $students->update();
        return redirect('/show-students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect('show-students');
    }
}
