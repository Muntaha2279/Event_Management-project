<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller 
{
    public function listallevents(){
        //$events = Event::where('user_id', auth()->user()->id)->get();
        $events = Event::all();
        return view("list_all_event")->with('events', $events);
    }

    public function listongoingevents(){
        // $events = Event::where('user_id', auth()->user()->id)->where('event_date', '=', date('Y-m-d'))->get();
        $events = Event::where('event_date', '=', date('Y-m-d'))->get();
        return view("list_all_event")->with('events', $events);
    }

    public function listupcomingevents(){
        // $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>', date('Y-m-d'))->get();
        $events = Event::where('event_date', '>', date('Y-m-d'))->get();
        return view("list_all_event")->with('events', $events);
    }

    public function create(){
        return view('create_event');
    }

    public function addevent(Request $request){

        $event = new Event;
 
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->event_date = $request->eventdate;
        $event->start_time = $request->start;
        $event->end_time = $request->end;
        $event->user_id = auth()->user()->id;
 
        $event->save();

        return redirect('/all-events');
    }

    public function update(int $id){
        $event = Event::where('id', $id)->first();
        return view('update_event')->with('event', $event);
    }

    public function updateevent(Request $request){
        $event = Event::where('id', $request->id)->first();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->event_date = $request->eventdate;
        $event->start_time = $request->start;
        $event->end_time = $request->end;
        $event->user_id = auth()->user()->id;
 
        $event->save();

        return redirect('/all-events');
    }

    public function delete(int $id){
        $event = Event::where('id', $id)->first();
        $event->delete();
        return redirect('/all-events');
    }
}