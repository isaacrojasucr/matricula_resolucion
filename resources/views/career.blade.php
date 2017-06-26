@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Carreras del Departamento de Ciencias Naturales</h1>
            
            @foreach ($listCareer as $career)

            <h2>{{$career->name}}</h2>
            <p>Encargado(a): {{$career->encargado . ' ' . $career->lastname}}</p>
            <p>Contacto: {{$career->email}}</p>
            <p>Número: {{$career->phone}}</p>

            @endforeach
        </div>
    </div>
</div>

@endsection