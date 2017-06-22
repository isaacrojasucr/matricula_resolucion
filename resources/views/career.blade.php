@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Carreras del Departamento de Ciencias Naturales</h1>
            
            @foreach ($listCareer as $career)

            <h2>{{$career->NOMBRE}}</h2>
            <p>Encargado(a): {{$career->ENCARGADO}}</p>
            <p>Contacto: {{$career->CONTACTO}}</p>
            <p>Número: {{$career->NUMERO}}</p>

            @endforeach
        </div>
    </div>
</div>

@endsection