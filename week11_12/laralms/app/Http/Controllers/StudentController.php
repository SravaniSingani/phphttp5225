<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // List of students
        return view('students.index', ['students' => Student::all()]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create a new Student
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
        Student::create($request->validated());
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //Show details of a student 
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
        $student->update($request->validated());
        return view('students.show', compact('student'));
       // return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */


     public function trash($id){
        Student::Destroy($id);
        return redirect() -> route('students.index');
     }

    public function destroy(Student $student)
    {
        //Delete a student

    }
}
