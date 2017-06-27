@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Servicios del Departamento de Ciencias Naturales para 
            @if ($rol == '0')
                Profesores
            @else
                Estudiantes
            @endif
            </h1>
            
            @foreach ($listService as $service)

            <h2>{{$service->NOMBRE}}</h2>
            <p>Descripción: {{$service->DESCRIPCION}}</p>
            <a href="{{$service->ARCHIVO}}" class="btn btn-primary">Descargar</a>

            @endforeach
        </div>
    </div>
</div>

@endsection