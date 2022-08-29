@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item " aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Setores</li>
  </ol>
</nav>
@stop

@section('content')
<div class="card">
  <div class="card-header">Lista de Setores</div>
  
  <div class="card-body"> 
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Secretário Adjunto</th>
          <th>superintendente</th>
         @can('admin') 
         <th>Ações</th>  
         @endcan     
        </tr>
        
      </thead>
      <tbody>
        @forelse ($sectors as $sector)
          <tr>
            <td>{{ $sector->id }}</td>
            <td>{{ $sector->name }}</td>
            <td>{{ $sector->secretaria_adjunta}}</td>
            <td>{{ $sector->superintendente }}</td>

            @can('admin')
            <td>
              <a href="{{ route('sectors.edit', $sector) }}" class="fas fa-user-edit" ></a>
            </td>
            @endcan
          </tr>
        @empty
            <tr>
            <td colspan="6" class="text-center text-danger">Nenhum registro encontrado.</td>
            </tr>
                 
        @endforelse    
      </tbody>
    </table> 
    <div> <br>
      
      <a href="{{ route('sectors.create') }}" class="btn btn-success">Cadastrar Novo Setor</a>
      </div> 
  </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop