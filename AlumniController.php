<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni.index', compact('alumni'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumnus = Alumni::findOrFail($id);
        return view('alumni.show', compact('alumnus'));
    }

    // Other CRUD functions (create, store, edit, update, destroy) can follow later
}
