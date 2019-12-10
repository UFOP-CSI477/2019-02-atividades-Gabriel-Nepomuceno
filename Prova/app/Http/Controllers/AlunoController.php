<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

class AlunoController extends Controller
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
        $alunos = Aluno::orderBy('curso','asc')->orderBy('nome','asc')->get();
        return view('dashboard',compact('alunos'));
    }
    
}
