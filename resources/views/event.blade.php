@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Eventos del Departamento de Ciencias Naturales para 
            @if ($rol == '0')
                Profesores
            @else
                Estudiantes
            @endif
            </h1>
            
            @foreach ($listEvents as $event)

            <h2>{{$event->NOMBRE}}</h2>
            <p>Descripción: {{$event->DESCRIPCION}}</p>
            <p>Fecha Inicio: {{$event->FECHA_INICIO}}</p>
            <p>Fecha Final: {{$event->FECHA_FINAL}}</p>

            @endforeach
        </div>
    </div>
</div>

@endsection