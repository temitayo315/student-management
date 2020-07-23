<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course.courseReg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'code'=> 'required',
            'title'=> 'required',
            'unit'=> 'required',
            'nature'=> 'required',
            
        ]);

        $insert = new Courses;
        $insert->code = $request->input('code');
        $insert->title = $request->input('title');
        $insert->unit = $request->input('unit');
        $insert->nature = $request->input('nature');

        $insert->save();
        return redirect('/')->with('info', 'Course Registered Successfully!');
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
        //
        $edit = Courses::find($id);
        return view('course.edit', ['edit'=>$edit]);
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
         $update = Courses::find($id);

        $update->code = $request->input('code');
        $update->title = $request->input('title');
        $update->unit = $request->input('unit');
        $update->nature = $request->input('nature');

        $update->save();
        return redirect('/')->with('info', 'Course changes updated');
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
        $delete = Courses::find($id);
        $delete->delete();
        return redirect('/')->with('danger', 'Course Deleted!');
    }
}
