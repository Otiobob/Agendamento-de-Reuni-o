@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item " aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
  </ol>
</nav>
@stop

@section('content')
<div class="card">
  <div class="card-header">Editar Setor: {{$sector['name']}}</div>
  <div class="card-body"> 
    <form action="{{ route('sectors.update', $sector) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nome Completo</label>
          <input type="text" value="{{$sector->name}}" class="form-control" id="name" name="name" placeholder="Digite o nome">
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
          <label for="cpf">Secretário(a) Adjunto</label>
          <input type="text" value="{{$sector->cpf}}" class="form-control" id="secretaria_adjunta" name="secretaria_adjunta"  placeholder="Digite o nome">
      </div>
      <div class="form-group">
        <label for="matricula">Superintendente</label>
        <input type="text" value="{{$sector->matricula}}" class="form-control" id="superintendente" name="superintendente" placeholder="Digite o nome">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Salvar Alteração</button>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop