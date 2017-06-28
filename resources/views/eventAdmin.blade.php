@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEvent" id="buttonTable">
                Agregar
            </button>
            @if ($listEvents != null)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th> 
                            <th>Dirigido a</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach ($listEvents as $event)
                        <tr>
                            <th>{{$contador++}}</th>
                            <td>{{$event->NOMBRE}}</td>
                            <td>{{$event->DESCRIPCION}}</td> 
                            <td>
                                @if ($event->ROL == '0')
                                    Profesores
                                @else
                                    Estudiantes
                                @endif
                            </td>
                            <td>{{$event->FECHA_INICIO}}</td>
                            <td>{{$event->FECHA_FINAL}}</td>
                            <td>
                                <a title=@lang('form.edit') class="btn btn-primary btn-xs" href="{{ url('/Eventos/Admin/Editar/' . $event->ID_EVENTO) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a title=@lang('form.delete') class="btn btn-danger btn-xs" href="{{ url('/Eventos/Admin/Eliminar/' . $event->ID_EVENTO) }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>No existen Eventos</strong>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="addEventLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">Agregar Evento</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/Eventos/Admin/Agregar') }}" method="POST">
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
                        <label for="start_date">Fecha Inicio</label>
                        <input name="start_date" type="date" class="form-control" id="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Fecha Final</label>
                        <input name="end_date" type="date" class="form-control" id="end_date">
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