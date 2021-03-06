@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('events.editEvent')</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/eventos') }}" title=@lang('form.back')>
                        <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                        </button>
                    </a>
                    <br />
                    <br />
            
                    @foreach ($listEvents as $event)

                    <form action="{{ url('admin/eventos/editar/' . $event->ID_EVENTO . '/edit') }}" method="POST">
                        <div class="form-group">
                            <label for="name">@lang('form.name')</label>
                            <input value="{{ $event->NOMBRE }}" name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="desc">@lang('form.description')</label>
                            <textarea name="desc" class="form-control" rows="3">{{ $event->DESCRIPCION }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="rol">@lang('form.addressedTo')</label>
                            <select name="rol" class="form-control">
                                @if ($event->ROL == '0')
                                    <option value="0" selected>@lang('form.teachers')</option>
                                    <option value="1">@lang('form.students')</option>
                                @else
                                    <option value="0">@lang('form.teachers')</option>
                                    <option value="1" selected>@lang('form.students')</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="start_date">@lang('form.iniDate')</label>
                            <input value="{{ $event->FECHA_INICIO }}" name="start_date" type="date" class="form-control" id="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">@lang('form.finalDate')</label>
                            <input value="{{ $event->FECHA_FINAL }}" name="end_date" type="date" class="form-control" id="end_date">
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" class="btn btn-primary">@lang('form.edit')</button>
                    </form>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection