@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSection" id="buttonTable">
                Agregar
            </button>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th> 
                            <th>Dirigido a</th>
                            <th>Archivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach ($listService as $service)
                        <tr>
                            <th>{{$contador++}}</th>
                            <td>{{$service->NOMBRE}}</td>
                            <td>{{$service->DESCRIPCION}}</td> 
                            <td>
                                @if ($service->ROL == '0')
                                    Profesores
                                @else
                                    Estudiantes
                                @endif
                            </td>
                            <td>{{$service->ARCHIVO}}</td>
                            <td>
                                <a title=@lang('form.edit') class="btn btn-primary btn-xs" href="{{ url('/Servicios/Admin/Editar/' . $service->ID_SERVICIO) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a title=@lang('form.delete') class="btn btn-danger btn-xs" href="{{ url('/Servicios/Admin/Eliminar/' . $service->ID_SERVICIO) }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Section Modal -->
<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="addSectionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/Servicios/Admin/Agregar') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="desc">Descripción</label>
                        <input name="desc" type="text" class="form-control" id="desc" placeholder="Descripción">
                    </div>
                    <div class="form-group">
                        <label for="rol">Dirigido a</label>
                        <select name="rol" class="form-control">
                            <option value="0">Profesores</option>
                            <option value="1">Estudiantes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Archivo</label>
                        <input name="file" type="file" class="form-control" id="file">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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