@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Secciones del Departamento de Ciencias Naturales</h1>
            
            @foreach ($listSection as $section)

            <h2>{{$section->NOMBRE}}</h2>
            <p>Encargado(a): {{$section->ENCARGADO}}</p>
            <p>Contacto: {{$section->CONTACTO}}</p>
            <p>Número: {{$section->NUMERO}}</p>

            @endforeach
        </div>
    </div>
</div>
@endsection