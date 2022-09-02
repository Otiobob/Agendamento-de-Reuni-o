@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
<h1>Agendar Reunião</h1>
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
        <!-- Create Post Form -->
          <form action="{{ route('agenda.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Digite o título">
              </div>
              <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="Insira a descrição" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="start">Início da Reunião (Data e Horário)</label>
                <input class="form-control" type="datetime-local" id="start" name="start" min="{{date('Y-m-d\TH:i')}}" value="{{$data ?? ''}}T{{$hora ?? ''}}"> 
              </div>
              <div class="form-group">
                <label for="end">Término da Reunião (Data e Horário)</label>
                <input class="form-control" type="datetime-local" id="end" name="end" min="{{date('Y-m-d\TH:i')}}"> 
              </div>
              <div class="col-sm-6">
                <!-- radio -->
                <label> Prioridade </label>
                <div class="form-group clearfix">
                 
                  <div class="icheck-primary d-inline">
                    <input type="radio" name="color"    >
                    <label for="red"  value="red" style="color:red">GRANDE URGÊNCIA</label>
                  </div>
                  <br>
                  <div class="icheck-primary d-inline">
                    <input type="radio" name="color" >
                    <label for="blue" value="blue" style="color:rgb(0, 123, 255)" >MEDIA URGÊNCIA</label>
                  </div>
                  <br>
                  <div class="icheck-primary d-inline">
                    <input type="radio" name="color" >
                    <label for="green" value="green" style="color:rgb(24, 149, 5)">BAIXA URGÊNCIA</label>
                  </div>
                  
                </div>
  
          <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
           
@stop

@section('css')

@stop

@section('js')

@stop