<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentCourseRequest;
use App\Http\Requests\UpdateStudentCourseRequest;
use App\Models\StudentCourse;

class StudentCourseController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentCourseRequest  $request
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentCourseRequest $request, StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCourse $studentCourse)
    {
        //
    }
}
