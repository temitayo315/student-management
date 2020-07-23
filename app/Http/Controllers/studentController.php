<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Courses;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returns the homepage
        $student = Student::all();
        $course = Courses::all();
        return view('studentList', ['student'=>$student, 'course'=>$course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //registration page
        return view('studentReg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //student Registration
        $request->validate([
            'matric'=> 'required',
            'firstname'=> 'required',
            'lastname'=> 'required',
            'gender'=> 'required',
            'department'=> 'required',
        ]);

        $insert = new Student;
        $insert->matric = $request->input('matric');
        $insert->firstname = $request->input('firstname');
        $insert->lastname = $request->input('lastname');
        $insert->gender = $request->input('gender');
        $insert->department = $request->input('department');

        $insert->save();
        return redirect('/')->with('info', 'New student Registered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit student
        $edit = Student::find($id);
        return view('edit', ['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = Student::find($id);

        $update->matric = $request->input('matric');
        $update->firstname = $request->input('firstname');
        $update->lastname = $request->input('lastname');
        $update->gender = $request->input('gender');
        $update->department = $request->input('department');

        $update->save();
        return redirect('/')->with('info', 'Student record updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Student::find($id);
        $delete->delete();
        return redirect('/')->with('danger', 'Student Record Deleted!');
    }
}

