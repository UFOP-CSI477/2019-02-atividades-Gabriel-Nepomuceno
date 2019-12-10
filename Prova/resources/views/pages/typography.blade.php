@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card card-plain">
      <div class="card-header card-header-danger" style="background: #962038">
        <h4 class="card-title">Cadastro de Projetos</h4>
      </div>
      <div class="card-body">
        <form method="post" action="{!! action('ProjetoController@store') !!}" style="padding: 0 2% 0 2%">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="aluno">Aluno:</label>
            <select name="aluno" class="form-control" id="aluno" required>
              <option selected value="0" disabled>Selecione um Aluno</option>
              @foreach ($alunos as $aluno)
              <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="professor">Professor:</label>
            <select name="professor" class="form-control" id="professor" required>
              <option selected value="0" disabled>Selecione um Professor</option>
              @foreach ($professors as $professor)
              <option value="{{$professor->id}}">{{$professor->nome}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo do Projeto">
          </div>
          <div class="form-group">
            <label for="ano">Ano:</label>
            <input name="ano" type="number" min="2019" class="form-control" id="ano" placeholder="Ano">
          </div>
          <div class="form-group">
            <label for="semestre">Semestre:</label>
            <select name="semestre" class="form-control" id="semestre" placeholder="Semestre" required>
              <option selected value="0" disabled>Selecione um Semestre</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg" style="background: #962038; color:white">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection