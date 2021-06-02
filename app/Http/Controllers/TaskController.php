<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        
        $task=new Task;
        
        $this->validate($request,[
            'task'=>'required|max:100|min:5',

        ]);
 
        $task->task=$request->task;
        $task->save();
         
        $data=Task::all();
        return view('tasks')->with('tasks' ,$data);
    }
    public function UpdateasCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();

    }

    public function UpdateasNotCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();

    }

    public function deletetask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();

    }

    public function updatetaskview($id){
        $task=Task::find($id);
        return view('updatetask')->with('taskdata',$task);

    }

    public function updatetask(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task::all();
        
        return view('tasks')->with('tasks', $datas);

    }
}
 