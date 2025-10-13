<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        DB::table('alumni')->get();
    }
}
