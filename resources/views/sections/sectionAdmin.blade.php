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
                                <a title=@lang('form.edit') class="btn btn-primary btn-xs" href="{{ url('/admin/secciones/editar/' . $section->ID_SECCION) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a title=@lang('form.delete') class="btn btn-danger btn-xs" href="{{ url('/admin/secciones/eliminar/' . $section->ID_SECCION) }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
                <h4 class="modal-title" id="addSectionLabel">Agregar Sección</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/secciones/agregar') }}" method="GET">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="name">Encargado(a)</label>
                        <select name="inCharge" class="form-control">
                            @foreach ($listUser as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
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