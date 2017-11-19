<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use DB;

class EventsController extends Controller
{
    public function index()
    {

		//$events = Event::all();

    	//return view('events.index', compact('events'));

        $search = \Request::get('search');
        $events = Event::where('title','like','%'.$search.'%')->orderBy('id')->paginate(8);
        return view('events.index', compact('events'));

    }

    public function eventdetails($id)
    {
    	$event = Event::findOrFail($id);
    	
    	return view('events.eventpage' , compact('event'));
    }

    public function eventsignup($id)
    {
        $event = Event::findOrFail($id);
        
        return view('events.eventsignup' , compact('event'));
    }

}
