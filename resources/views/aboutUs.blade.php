@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Acerca de Ciencias Naturales</h1>
            <p>En el  Departamento de Ciencias Naturales se atienden las solicitudes 
            de resolución a otras sedes, trámites de inclusión de cursos, entrega de 
            copias selladas y firmadas de programas de cursos, programación de los cursos 
            de servicio para la Sede desde sus cuatro secciones: Biología, Matemática, 
            Química y Física.</p>
            <p>El departamento tiene un promedio de 120 profesores por ciclo lectivo y 
            una población de aproximadamente 1.500 estudiantes empadronados en sus diferentes 
            carreras.</p>
            <p>Ofrece nueve carreras, cinco propias de la Sede de Occidente y cuatro desconcentradas 
            de la Sede Rodrigo Facio.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            @foreach ($listUsers as $user)
                @if($user->role == 4)
                    <h2 class="text-center">Director del Departamento</h2>
                    <h3>Nombre</h3>
                    <p>{{$user->name . ' ' . $user->lastname}}</p>
                    <h3>Correo</h3>
                    <p>{{$user->email}}</p>
                @endif
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($listUsers as $user)
                @if($user->role == 1)
                    <h2 class="text-center">Secretaria del Departamento</h2>
                    <h3>Nombre</h3>
                    <p>{{$user->name . ' ' . $user->lastname}}</p>
                    <h3>Correo</h3>
                    <p>secretariacienciasnaturales.so@ucr.ac.cr</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection