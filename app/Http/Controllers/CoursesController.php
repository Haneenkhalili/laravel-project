<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\StudentCourse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;



class CoursesController extends Controller
{

//    /**
//     * Display a listing of the resource.
//     *
////     * @return \Illuminate\Http\Response
//     */
    public function index(Request $request)
    {
        $courses = Courses::all();
        if($request->is('api/*')){
            $jason= json_encode($courses);
            return $jason;
        }
        else{
            return view('courses/course', compact('courses'));

        }

    }


    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function create()
    {

        return view('courses.add-course');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->is('api/*')){
            $saveRecord = [
                'name' => $request->name,
                'prof_name' => $request-> prof_name,

            ];
            $courses = Courses::create($saveRecord);
            return 'done';
        }
        else{

            foreach ($request->name as $key => $insert) {
                $saveRecord = [

                    'name' => $request->name[$key],
                    'prof_name' => $request-> prof_name[$key],

                ];
                $courses = Courses::create($saveRecord);

            }
            return redirect('/courses');

        }


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





    /*** Show the form for editing the specified resource.
   *
    * @param  int  $id
//   * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::findOrFail($id);
//        dd($course);
        return view('/courses/edit-course')->with([
            'course'=>$course
        ]);
//        return view('courses.edit-course');

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
        $validatedData = $request->validate([
            'name' => 'required',
            'prof_name' => 'required'

        ], [
            'name.required' => 'Name is required'
        ]);

        $course = Courses::findOrFail($id);
        $course->name = $request->input('name');
        $course->prof_name = $request->input('prof_name');
        $course->update();
        return redirect('/courses');



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
        Courses::where('id',$id)->delete();

        return redirect('/courses');

    }
}
