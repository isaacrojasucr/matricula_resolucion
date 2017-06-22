@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Encargado</th> 
                            <th>Contacto</th>
                            <th>Número</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach ($listCareer as $career)
                        <tr>
                            <th>{{$contador++}}</th>
                            <td>{{$career->NOMBRE}}</td>
                            <td>{{$career->ENCARGADO}}</td> 
                            <td>{{$career->CONTACTO}}</td>
                            <td>{{$career->NUMERO}}</td>
                            <td>
                                <a class="btn btn-info" href="#" role="button">Editar</a>
                                <a class="btn btn-danger" href="#" role="button">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="#" role="button">Agregar</a>
        </div>
    </div>
</div>

@endsection