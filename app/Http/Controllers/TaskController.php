<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Project;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response

     */
//    public function index($id)
//    {
//        $project = Project::findOrFail($id);
//        return view('tasks/show-task')->with([
//            'projects'=>$project
//        ]);
//
//    }

    public function showDatatable($id)
    {
        $tasks = Task::all()->sortBy(['order','ASC'])->where('project_id',$id);
        $project=Project::findOrFail($id);
        return view('/tasks/show-task',compact('tasks','project'));
    }
    public function updateOrder(Request $request)
    {
        $tasks = Task::all();

        foreach ($tasks as $task) {
            $task->timestamps = false; // To disable update_at field updation
            $id = $task->id;

            foreach ($request->order as $order) {
                if ($order['id'] == $id) {
                    $task->update(['order' => $order['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create($project_id)
    {
        return view('tasks/add-task')->with([
            'projects'=>$project_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $project_id)
    {

        $request->validate([
            'name' => 'required'

        ]);

      $task =new Task();
      $task->name=$request->name;
       $task->project_id=$project_id;
       $task->save();


        return redirect('/students');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
