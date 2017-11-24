<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\EventRegistrations;
use DB;
use View;
use Carbon\Carbon;

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

        $admin = DB::table('admin')
                                ->where('user_id', '=', \Auth::user()->id)
                                ->get();

        foreach($admin as $x){
            
            $asss = DB::table('associations')
                                ->where('id', '=', $x->id)
                                ->get();

            break;
        }

        $creators = DB::table('events')
                                ->where('creator', '=', \Auth::user()->name)
                                ->get();
        
        return view('logged.events.indexL', compact('events','type','asss','creators'));

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

    public function myloggedeventdetails($id)
    {
        $event = Event::findOrFail($id);
        $participants = DB::table('eventRegistrations')
                                ->where('event_id', '=', $id)
                                ->get();

        
        return view('logged.events.myeventpageL' , compact('event', 'participants'));
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

    public function opennewevent()
    {
        return view('logged.events.eventcreationL');
    }
    public function newevent(Request $request)
    {
        #Check if values are inserted
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',    
            'description' => 'required',
            'address' => 'required'
        ]);

        $string = $request->date . ' ' . $request->time;
        $stringparsed = Carbon::createFromFormat('d.m.Y H:m', $string);

        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->eventdate = $stringparsed;
        $event->address = $request->address;
        $event->price = $request->price;
        $event->creator = \Auth::user()->name;
        $event->save();
 
        return redirect()->action('EventsController@loggedindex');
    }

    public function openupdateeve($id)
    {
        $event = DB::table('events')
                                ->where('id', '=', $id)
                                ->get();

        return view('logged.events.myeventpageL', compact('event'));
    }

    /*$event = DB::table('events')
                                ->where('id', '=', $id)
                                ->get();*/

}
