<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show(){
        return view("tasks", [
            "tasks" => auth()->user()->tasks
        ]);
    }

    public function create(){
        $task = new Task();
        $task->user_id = auth()->user()->id;
        $task->description = request("task");
        $task->save();
        return redirect("/tasks");
    }

    public function destroy(Request $request,$id){
        $task = Task::find($id);
        $task->delete();
        return redirect("/tasks");
    }
}