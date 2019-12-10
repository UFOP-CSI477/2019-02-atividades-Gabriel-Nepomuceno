@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary" style="background: #962038">
            <h4 class="card-title mt-0"> Relatorio dos Professores</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="padding: 0 2% 0 2%">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    Área
                  </th>
                </thead>
                <tbody>
                  @foreach ($professors as $professor)
                  <tr>
                    <td>{{$professor->id}}</td>
                    <td>{{$professor->nome}}</td>
                    <td>{{$professor->area}}</td>
                    <td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection