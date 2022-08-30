@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Agenda</h1>
@stop

@section('content')

{{-- Corpo do calendário com o ID --}}
<div id='calendar' class="card p-5"></div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/locales-all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          displayEventEnd: true,
          selectable: true, 
          locale:"pt-BR",
          
          dayMaxEventRows: 3,
          select: function(event){ 
            window.location.replace('http://127.0.0.1:8000/agenda/'+event.startStr+''+'/create') 
          },
          events: [
            @foreach($agendas as $agenda)
                {
                    id: '{{ $agenda->id }}',
                    title: '{{ $agenda->title }}',
                    start: '{{ $agenda->start }}',
                    end: '{{ $agenda->end }}',
                    color: '{{$agenda->color}}'
                    
                },
            @endforeach            
          ],
          
        });
        calendar.render();
      });

    </script>
    
@stop