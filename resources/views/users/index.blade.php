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
  <div class="card-header">Lista de Usuários</div>
  <div class="card-body"> 
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Setor</th>
          <th>CPF</th>
          <th>Matrícula</th>
         @can('admin') 
         <th>Ações</th>  
         @endcan     
        </tr>
        
      </thead>
      <tbody>
        @forelse ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{$user->sector->name}}</td>            
            <td>{{ $user->cpf }}</td>
            <td>{{ $user->matricula }}</td>
            
            @can('admin')
            <td>
              <a href="{{ route('users.edit', $user) }}" class="fas fa-user-edit" ></a>
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
    {{$users->links()}} 
  </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop