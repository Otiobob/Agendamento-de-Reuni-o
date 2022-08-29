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
  <div class="card-header">Editando o Usuário: <b>  {{$user->name}} </b></div>
  <div class="card-body"> 
    <form action="{{ route('users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nome Completo</label>
          <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" placeholder="Digite o nome">
        </div>
        <div class="form-group">
          <label>Setor</label>
          <select class="form-control" name="sector">
            <option selected>Selecione um Setor</option>
                      @foreach($sectors as $sector)
                    <option value="{{$sector->id}}">{{$sector->name}}</option>
                    @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" value="{{$user->cpf}}" class="form-control cpf" id="cpf" name="cpf"  placeholder="Digite o CPF">
      </div>
      <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" value="{{$user->matricula}}" class="form-control .matricula" id="matricula" name="matricula" placeholder="Digite a Matrícula">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email" placeholder="Digite o Email">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" value="{{$user->celular  }}" class="form-control" id="telefone" name="celular" placeholder="Digite o Telefone">
</div>
<div class="form-group">
  <label for="password">Senha</label>
  <input type="text"  class="form-control" id="password" name="password" placeholder="Digite a senha">
</div>
<div class="form-group">
  <label for="password_confirmation">Confirme a Senha</label>
  <input type="text"  class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Digite a senha">
</div>

<div>
  <button type="submit" class="btn btn-primary">Salvar Alteração</button>
</div>
</form>
  </div>
  @if ($errors->any()) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop