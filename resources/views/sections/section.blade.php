@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Secciones del Departamento de Ciencias Naturales</h1>
            <hr>
            <?php $contador = 1; ?>
            @foreach ($listSection as $section)
                @if($contador == count($listSection) && $contador%2 != 0)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">{{$section->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Encargado(a): {{$section->name." ".$section->lastname}}</p>
                                    <p>Contacto: {{$section->email}}</p>
                                    <p>Número: {{$section->phone}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                @else
                    @if ($contador%2 != 0)
                    <div class="row">
                    @endif
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">{{$section->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Encargado(a): {{$section->name." ".$section->lastname}}</p>
                                    <p>Contacto: {{$section->email}}</p>
                                    <p>Número: {{$section->phone}}</p>
                                </div>
                            </div>
                        </div>
                    @if ($contador%2 == 0)
                    </div>
                    @endif

                    <?php $contador++; ?>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection