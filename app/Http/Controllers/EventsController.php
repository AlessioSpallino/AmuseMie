<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\EventRegistrations;
use DB;

class EventsController extends Controller
{
    public function index()
    {

		//$events = Event::all();

    	//return view('events.index', compact('events'));

        $search = \Request::get('search');
        $events = Event::where('title','like','%'.$search.'%')->orderBy('id')->paginate(8);
		$type = 'event';
        return view('events.index', compact('events','type'));

    }

    public function loggedindex()
    {

        //$events = Event::all();

        //return view('events.index', compact('events'));

        $search = \Request::get('search');
        $events = Event::where('title','like','%'.$search.'%')->orderBy('id')->paginate(8);
		$type = 'event';

        
        return view('logged.events.indexL', compact('events','type'));

    }

    public function eventdetails($id)
    {
    	$event = Event::findOrFail($id);
    	
    	return view('events.eventpage' , compact('event'));
    }

    public function loggedeventdetails($id)
    {
        $event = Event::findOrFail($id);
        $participants = DB::table('eventRegistrations')
                                ->where('event_id', '=', $id)
                                ->get();

        
        return view('logged.events.eventpageL' , compact('event', 'participants'));
    }

    public function eventsignup($id)
    {
        $event = Event::findOrFail($id);
        return view('logged.events.eventsignupL', compact('event'));
    }

    public function newparticipant(Request $request)
    {
        #Check if values are inserted
        $this->validate($request, [
            'val1' => 'required',
            'val2' => 'required'    

        ]);

        $reg = new EventRegistrations;
        $reg->name = \Auth::user()->name;
        $reg->user_id = \Auth::user()->id;
        $reg->event_id = $request->val4;
        $reg->email = $request->val2;
        $reg->allergies = $request->val3;
        $reg->save();

        
        return redirect()->action('EventsController@loggedindex');
    }

}
