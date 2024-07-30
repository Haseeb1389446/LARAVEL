<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::all();
        return view('students.show',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new student();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->city = $request->city;
        $students->save();
        return redirect('show-students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $students = student::find($id);
        return view('students.update',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $students = student::find($id);
        $students->name = $request->name;
        $students->email = $request->email;
        $students->city = $request->city;
        $students->update();
        return redirect('show-students');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $students = student::find($id);
        $students->delete();
        return redirect('show-students');
    }
}
