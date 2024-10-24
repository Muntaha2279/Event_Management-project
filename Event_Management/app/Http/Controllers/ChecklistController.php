<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Task;
// use App\Models\Checklist;
use Illuminate\Http\Request;

class ChecklistController extends Controller 
{
    public function allchecklist(){
        $cl = Task::where('assigned_to_id', auth()->user()->id)->with('event')->get();
        return view("all_checklist")->with('cl', $cl);
    }

    public function updatestatus(int $id){
        $cl = Task::where('id', $id)->first();
        if ($cl->status == "Pending") {
            $cl->status = "Completed";
        }
        else {
            $cl->status = "Pending";
        }
        
        $cl->save();
        return redirect('/checklist');
    }

    // public function allchecklist(){
    //     $cl = Checklist::where('user_id', auth()->user()->id)->with('event')->get();
    //     return view("all_checklist")->with('cl', $cl);
    // }

    // public function create(){
    //     $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
    //     return view('create_checklist')->with('events', $events);
    // }

    // public function createchecklist(Request $request){

    //     $cl = new Checklist;
 
    //     $cl->title = $request->title;
    //     $cl->event_id = $request->event;
    //     $cl->status = "Pending";
    //     $cl->user_id = auth()->user()->id;
 
    //     $cl->save();

    //     return redirect('/checklist');
    // }

    // public function update(int $id){
    //     $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
    //     $cl = Checklist::where('id', $id)->first();
    //     return view('update_checklist')->with('cl', $cl)->with('events', $events);
    // }

    // public function updatechecklist(Request $request){
    //     $cl = Checklist::where('id', $request->id)->first();

    //     $cl->title = $request->title;
    //     $cl->event_id = $request->event;
    //     $cl->user_id = auth()->user()->id;
 
    //     $cl->save();

    //     return redirect('/checklist');
    // }
    
    // public function updatestatus(int $id){
    //     $cl = Checklist::where('id', $id)->first();
    //     if ($cl->status == "Pending") {
    //         $cl->status = "Completed";
    //     }
    //     else {
    //         $cl->status = "Pending";
    //     }
        
    //     $cl->save();
    //     return redirect('/checklist');
    // }

    // public function delete(int $id){
    //     $cl = Checklist::where('id', $id)->first();
    //     $cl->delete();
    //     return redirect('/checklist');
    // }
}
