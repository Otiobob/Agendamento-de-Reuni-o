@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Novo Setor</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card ">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!-- /resources/views/post/create.blade.php -->
                      @if($errors->any())
                          <div class="alert alert-danger alert-dismissible">
                            <h5><i class="icon fas fa-ban"></i>Atenção</h5>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                          @if(session('mensagem'))
                          <div class="alert alert-success alert-dismissible">
                            <h5><i class="icon fas fa-check"></i>{{session('mensagem')}}</h5> 
                          </div>
                          @endif
              <!-- Create Post Form -->
                <form action="{{ route('sectors.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nome do Setor</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label for="secretaria_adjunta">Secretaria Adjunta</label>
                      <input type="text" class="form-control" id="secretaria_adjunta" name="secretaria_adjunta" value="{{ old('sec_adjunta') }}" placeholder="Secretaria">
                    </div>
                    <div class="form-group">
                      <label for="superintendente">Superintendente</label>
                      <input type="text" class="form-control" id="superintendente" name="superintendente" value="{{ old('superintendente') }}" placeholder="Superintendente">
                  </div>
                <div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
  
                  
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop