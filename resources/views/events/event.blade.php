@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>@lang('events.eventsTitle') 
            @if ($rol == '0')
                @lang('events.teachers')
            @else
                @lang('events.students')
            @endif
            </h1>
        </div>
    </div>
    <div class="row" id="events">
        <div class="col-md-12">
            @foreach ($listEvents as $event)
            <div class="panel panel-primary">
                <div class="panel-heading"> {{$event->NOMBRE}} </div>
                <div class="panel-content">
                    <p><strong>@lang('events.description'): </strong> {{$event->DESCRIPCION}}</p>
                    <?php 
                        $fecha_inicio = explode("-", $event->FECHA_INICIO);
                        $fecha_final = explode("-", $event->FECHA_FINAL);
                    ?>
                    <p><strong>@lang('events.date'): </strong> {{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] . ' ' }}  @lang('form.to') {{ $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection