<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller 
{
    public function listalltasks(){
        // $tasks = Task::where('user_id', auth()->user()->id)->with('event')->get();
        $tasks = Task::with('event','assigned_to')->get();
        return view("list_all_task")->with('tasks', $tasks);
    }

    public function listpendingtasks(){
        // $tasks = Task::where('user_id', auth()->user()->id)->where('status', '=', "Pending")->with('event')->get();
        $tasks = Task::where('status', '=', "Pending")->with('event','assigned_to')->get();
        return view("list_all_task")->with('tasks', $tasks);
    }

    public function create(){
        $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
        $users = User::all();
        return view('create_task')->with('events', $events)->with('users', $users);
    }

    public function addtask(Request $request){

        $task = new task;
 
        $task->title = $request->title;
        $task->description = $request->description;
        $task->event_id = $request->event;
        $task->assigned_date = $request->assigneddate;
        $task->assigned_to_id = $request->assignedto;
        $task->status = "Pending";
        $task->user_id = auth()->user()->id;
 
        $task->save();

        return redirect('/all-tasks');
    }

    public function update(int $id){
        $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
        $task = Task::where('id', $id)->first();
        $users = User::all();
        return view('update_task')->with('task', $task)->with('events', $events)->with('users', $users);
    }

    public function updatetask(Request $request){
        $task = Task::where('id', $request->id)->first();

        $task->title = $request->title;
        $task->description = $request->description;
        $task->event_id = $request->event;
        $task->assigned_date = $request->assigneddate;
        $task->assigned_to_id = $request->assignedto;
        $task->user_id = auth()->user()->id;
 
        $task->save();

        return redirect('/all-tasks');
    }

    public function updatestatus(int $id){
        $task = Task::where('id', $id)->first();
        $task->status = "Completed";
        $task->save();
        return redirect('/pending-tasks');
    }

    public function delete(int $id){
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('/all-tasks');
    }
}