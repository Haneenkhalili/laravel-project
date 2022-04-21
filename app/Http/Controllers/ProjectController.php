<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Project;
use App\Models\Students;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $student = Students::findOrFail($id);
        return view('projects/student-table')->with([
            'students'=>$student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create(   $student_id ,  $course_id)
    {

//        $student = Students::find($student_id);
//        $course =Courses::find($course_id);
        return view('projects/add-project')->with([
            'students'=>$student_id ,
            'courses'=>$course_id ,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $student_id ,  $course_id)
    {
        $project = new Project();
        $project->name=$request->name;
        $project->student_id=$student_id;
        $project->course_id=$course_id;
        $project->save();

         return redirect('/students') ;
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
    }
}
