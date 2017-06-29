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
        </div>
    </div>
    <div class="row" id="events">
        <div class="col-md-12">
            @foreach ($listEvents as $event)
            <div class="panel panel-primary">
                <div class="panel-heading"> {{$event->NOMBRE}} </div>
                <div class="panel-content">
                    <p><strong>Descripción:</strong> {{$event->DESCRIPCION}}</p>
                    <p><strong>Fecha Inicio:</strong> {{$event->FECHA_INICIO}}
                    <p><strong>Fecha Final:</strong> {{$event->FECHA_FINAL}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection