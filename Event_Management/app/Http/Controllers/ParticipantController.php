<?php

namespace App\Http\Controllers;

// use App\Models\Event;
use App\Models\User;
// use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller 
{
    public function allparticipant(){
        $participants = User::all();
        return view("all_participant")->with('participants', $participants);
    }

    // public function allparticipant(){
    //     $participants = Participant::where('user_id', auth()->user()->id)->with('event')->get();
    //     return view("all_participant")->with('participants', $participants);
    // }

    // public function create(){
    //     $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
    //     return view('add_participant')->with('events', $events);
    // }

    // public function createparticipant(Request $request){

    //     $pc = new Participant;

    //     $pc->name = $request->name;
    //     $pc->event_id = $request->event;
    //     $pc->mobile_no = $request->mobileno;
    //     $pc->email = $request->email;
    //     $pc->address = $request->address;
    //     $pc->status = "Invited";
    //     $pc->user_id = auth()->user()->id;
 
    //     $pc->save();

    //     return redirect('/participants');
    // }

    // public function update(int $id){
    //     $events = Event::where('user_id', auth()->user()->id)->where('event_date', '>=', date('Y-m-d'))->get();
    //     $pc = Participant::where('id', $id)->first();
    //     return view('update_participant')->with('pc', $pc)->with('events', $events);
    // }

    // public function updateparticipant(Request $request){
    //     $pc = Participant::where('id', $request->id)->first();

    //     $pc->name = $request->name2;
    //     $pc->event_id = $request->event;
    //     $pc->mobile_no = $request->mobileno;
    //     $pc->email = $request->email;
    //     $pc->address = $request->address;
    //     $pc->user_id = auth()->user()->id;
 
    //     $pc->save();

    //     return redirect('/participants');
    // }

    // public function delete(int $id){
    //     $pc = Participant::where('id', $id)->first();
    //     $pc->delete();
    //     return redirect('/participants');
    // }
}
