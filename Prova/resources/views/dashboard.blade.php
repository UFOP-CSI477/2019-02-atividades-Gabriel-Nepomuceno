@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary" style="background: #962038">
            <h4 class="card-title mt-0"> Relatorio dos Alunos</h4>
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
                    Curso
                  </th>
                </thead>
                <tbody>
                  @foreach ($alunos as $aluno)
                  <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->curso}}</td>
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

@push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
  });
</script>
@endpush