@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Editar Evento</h1>
            
            @foreach ($listEvents as $event)

            <form action="{{ url('/Eventos/Admin/Editar/' . $event->ID_EVENTO . '/Edit') }}" method="POST">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input value="{{ $event->NOMBRE }}" name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                        <label for="desc">Descripción</label>
                        <input value="{{ $event->DESCRIPCION }}" name="desc" type="text" class="form-control" id="desc">
                </div>
                <div class="form-group">
                    <label for="rol">Dirigido a</label>
                    <select name="rol" class="form-control">
                        @if ($event->ROL == '0')
                            <option value="0" selected>Profesores</option>
                            <option value="1">Estudiantes</option>
                        @else
                            <option value="0">Profesores</option>
                            <option value="1" selected>Estudiantes</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="start_date">Fecha Inicio</label>
                    <input value="{{ $event->FECHA_INICIO }}" name="start_date" type="date" class="form-control" id="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">Fecha Final</label>
                    <input value="{{ $event->FECHA_FINAL }}" name="end_date" type="date" class="form-control" id="end_date">
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