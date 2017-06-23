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
                        @foreach ($listSection as $section)
                        <tr>
                            <th>{{$contador++}}</th>
                            <td>{{$section->NOMBRE}}</td>
                            <td>{{$section->name}}</td> 
                            <td>{{$section->email}}</td>
                            <td>{{$section->phone}}</td>
                            <td>
                                <a title=@lang('form.edit') class="btn btn-info" href="#" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a title=@lang('form.delete') class="btn btn-danger" href="#" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSection">
                Agregar
            </button>
        </div>
    </div>
</div>

<!-- Add Section Modal -->
<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="addSectionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">Agregar Sección</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/SeccionesAdmin/Agregar') }}" method="GET">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="inCharge">Encargado</label>
                        <input name="inCharge" type="text" class="form-control" id="inCharge" placeholder="Encargado">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label for="number">Número</label>
                        <input name="number" type="number" class="form-control" id="number" placeholder="Número">
                    </div>
                    <button type="submit" class="btn btn-success">Agregar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection