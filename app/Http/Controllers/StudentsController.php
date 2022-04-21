<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Courses;
use App\Models\Students;
use App\Models\StudentCourse;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        //
        $student = Students::all();
        $course =Courses::all();
        return view('students/student')->with([
            'students'=>$student ,
            'course'=>$course ,
        ]);

    }

    public function addStudentCourses($student_id,$course_id)
    {


        $row=new StudentCourse();
        $row->student_id=$student_id;
        $row->course_id=$course_id;
        $row->save();


    }


    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Students::all();
        $course =Courses::all();
        return view('students/add-student')->with([
            'students'=>$student ,
            'course'=>$course ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address'=>'required',
            'password' => 'required|min:5'

        ], [
            'name.required' => 'Name is required',
            'Password.required' => 'Password is required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $student = Students::create($validatedData);

        foreach ($request->tags as $t){
            self::addStudentCourses($student->id,$t);
        }



        return redirect('/students');



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
//     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Students::findOrFail($id);
      return view('/students/edit-student', compact('student'));
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
            'email' => 'required|email|unique:users',
            'address'=>'required',

        ], [
            'name.required' => 'Name is required'
        ]);

        $student = Students::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->address = $request->input('address');
        $student->update();
        return redirect('/students');


//        Students::where('id',$id)->update($validatedData);

//        return back()->with('success', 'User created successfully.');

        // Students::where('id',$id)->update($request->all());

        // return redirect('/student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Students::where('id',$id)->delete();

        return redirect('/students');

    }
}
