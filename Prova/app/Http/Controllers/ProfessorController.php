<?php

namespace App\Http\Controllers;

use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        $professors = Professor::orderBy('nome')->get();
        return view('pages.table_list',compact('professors'));
    }
    
}
