@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Secciones del Departamento de Ciencias Naturales</h1>
            
            @foreach ($listSection as $section)

            <h2>{{$section->NOMBRE}}</h2>
            <p>Encargado(a): {{$section->name}}</p>
            <p>Contacto: {{$section->email}}</p>
            <p>Número: {{$section->phone}}</p>

            @endforeach
        </div>
    </div>
</div>
@endsection