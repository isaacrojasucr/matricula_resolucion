@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">@lang('events.eventsTitle') 
            @if ($rol == '0')
                @lang('form.teachers')
            @else
                @lang('form.students')
            @endif
            </h1>
            <hr>
            <?php $contador = 1; ?>
            @foreach ($listEvents as $event)
                @if($contador == count($listEvents) && $contador%2 != 0)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">{{$event->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p><strong>@lang('form.description'): </strong> {{$event->DESCRIPCION}}</p>
                                    <?php 
                                        $fecha_inicio = explode("-", $event->FECHA_INICIO);
                                        $fecha_final = explode("-", $event->FECHA_FINAL);
                                    ?>
                                    <p><strong>@lang('form.date'): </strong> {{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] . ' ' }}  @lang('form.to') {{ $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}
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
                                    <h3 class="panel-title text-center">{{$event->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p><strong>@lang('form.description'): </strong> {{$event->DESCRIPCION}}</p>
                                    <?php 
                                        $fecha_inicio = explode("-", $event->FECHA_INICIO);
                                        $fecha_final = explode("-", $event->FECHA_FINAL);
                                    ?>
                                    <p><strong>@lang('form.date'): </strong> {{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] . ' ' }}  @lang('form.to') {{ $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}
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