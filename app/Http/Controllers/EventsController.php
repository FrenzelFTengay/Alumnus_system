<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $event = DB::table('events')->get();
        return view('events.index', compact('event'));
    }
}
