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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('events.events')</h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addEvent" id="buttonTable">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true" title=@lang('form.add')></span>
                    </button>
                    @if ($listEvents != null)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('form.name')</th>
                                    <th>@lang('form.description')</th> 
                                    <th>@lang('form.addressedTo')</th>
                                    <th>@lang('form.iniDate')</th>
                                    <th>@lang('form.finalDate')</th>
                                    <th>@lang('form.act')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $contador = 1; ?>
                                @foreach ($listEvents as $event)
                                <tr>
                                    <th>{{$contador++}}</th>
                                    <td>{{$event->NOMBRE}}</td>
                                    <td>
                                    @if (strlen($event->DESCRIPCION) >= 75)
                                        {{substr($event->DESCRIPCION, 0, 75) . '...'}}</td>
                                    @else
                                        {{$event->DESCRIPCION}}
                                    @endif
                                    
                                    <td>
                                        @if ($event->ROL == '0')
                                            @lang('form.teachers')
                                        @else
                                            @lang('form.students')
                                        @endif
                                    </td>
                                    <?php 
                                        $fecha_inicio = explode("-", $event->FECHA_INICIO);
                                        $fecha_final = explode("-", $event->FECHA_FINAL);
                                    ?>
                                    <td>{{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] . ' ' }}</td>
                                    <td>{{ $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}</td>
                                    <td>
                                        <a title=@lang('form.edit') class="btn btn-primary btn-xs" href="{{ url('/admin/eventos/editar/' . $event->ID_EVENTO) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a title=@lang('form.delete') class="btn btn-danger btn-xs" href="{{ url('admin/eventos/eliminar/' . $event->ID_EVENTO) }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>@lang('events.noEvents')</strong>
                    </div>
                    @endif        
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Event Modal -->
<div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="addEventLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">@lang('events.addEvent')</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/eventos/agregar') }}" method="POST">
                    <div class="form-group">
                        <label for="name">@lang('form.name')</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="@lang('form.name')">
                    </div>
                    <div class="form-group">
                        <label for="desc">@lang('form.description')</label>
                        <textarea name="desc" class="form-control" rows="3" placeholder="@lang('form.description')"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rol">@lang('form.addressedTo')</label>
                        <select name="rol" class="form-control">
                            <option value="0">@lang('form.teachers')</option>
                            <option value="1">@lang('form.students')</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start_date">@lang('form.iniDate')</label>
                        <input name="start_date" type="date" class="form-control" id="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">@lang('form.finalDate')</label>
                        <input name="end_date" type="date" class="form-control" id="end_date">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-success">@lang('form.add')</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('form.close')</button>
            </div>
        </div>
    </div>
</div>

@endsection