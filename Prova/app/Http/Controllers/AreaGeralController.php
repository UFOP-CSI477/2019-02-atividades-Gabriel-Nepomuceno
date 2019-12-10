<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Aluno;
use App\Models\Professor;

class AreaGeralController extends Controller
{
    public function mostrarProjetos()
    {
        $projetos = Projeto::join('alunos', 'projetos.aluno_id', '=', 'alunos.id')
            ->join('professors', 'projetos.professor_id', '=', 'professors.id')
            ->select(['projetos.id AS idprojeto', 'semestre', 'ano', 'professors.nome AS professor', 'alunos.nome AS aluno', 'titulo', 'professors.area AS area'])
            ->orderBy('ano', 'desc')->orderBy('semestre', 'desc')->orderBy('alunos.nome', 'asc')->get();
        // $projetos = Projeto::join('alunos', 'projetos.aluno_id', '=', 'alunos.id')
        //     ->orderBy('ano', 'DESC')->orderBy('semestre', 'DESC')->orderBy('alunos.nome')->get();
        // // $requests = Subjects::join('requests','requests.subject_id','=','subjects.id')
        //     ->where('user_id',auth()->user()->id)
        //     ->orderBy('date')->get();
        // ->orderBy('ano', 'DESC')->orderBy('semestre', 'DESC')->orderBy('alunos.nome')->get();
        return view('general', compact('projetos'));
    }
    public function listarProfessores(Request $request)
    {
        $area = $request->area;
        
        $professors = Professor::where('area', 'like', "%$area%")
            ->orderBy('area', 'asc')
            ->orderBy('nome', 'asc')
            ->get();
        return view('professors', compact('professors'));
    }
}
