@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;margin-top:10%">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Sistema de Gerenciamento de TCCs') }}</h1>
      </div>
  </div>
</div>
@endsection
