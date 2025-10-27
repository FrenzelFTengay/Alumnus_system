<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('events.index', compact('event'));
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show', compact('event'));
    }
}
