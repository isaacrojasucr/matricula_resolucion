@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Editar Servicio</h1>
            
            @foreach ($listService as $service)

            <form action="{{ url('/Servicios/Admin/Editar/' . $service->ID_SERVICIO . '/Edit') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input value="{{ $service->NOMBRE }}" name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                        <label for="desc">Descripción</label>
                        <input value="{{ $service->DESCRIPCION }}" name="desc" type="text" class="form-control" id="desc">
                </div>
                <div class="form-group">
                    <label for="rol">Dirigido a</label>
                    <select name="rol" class="form-control">
                        @if ($service->ROL == '0')
                            <option value="0" selected>Profesores</option>
                            <option value="1">Estudiantes</option>
                        @else
                            <option value="0">Profesores</option>
                            <option value="1" selected>Estudiantes</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Nuevo Archivo</label>
                    <input name="file" type="file" class="form-control" id="file" aria-describedby="helpFile">
                    <span id="helpFile" class="help-block">Este campo es solo para subir un archivo nuevo. En caso contrario no utilizar.</span>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

            @endforeach
        </div>
    </div>
</div>
@endsection