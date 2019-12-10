<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Aluno;
use App\Models\Projeto;

use Illuminate\Http\Request;

class ProjetoController extends Controller
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
        $alunos = Aluno::orderBy('nome')->get(); 
        return view('pages.typography',compact('professors'),compact('alunos'));
    }
    public function store(Request $request){
        // dd($request);
        $projeto = new Projeto;
        $projeto->professor_id = $request->professor;
        $projeto->aluno_id = $request->aluno;
        $projeto->titulo = $request->titulo;
        $projeto->semestre = $request->semestre;
        $projeto->ano = $request->ano;
        $projeto->save();
        return redirect('/area-geral');
    }
    
}
