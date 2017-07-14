@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('services.editService')</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/servicios') }}" title=@lang('form.back')>
                        <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                        </button>
                    </a>
                    <br />
                    <br />

                    @foreach ($listService as $service)

                    <form action="{{ url('/admin/servicios/editar/' . $service->ID_SERVICIO . '/edit') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">@lang('form.name')</label>
                            <input value="{{ $service->NOMBRE }}" name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                                <label for="desc">@lang('form.description')</label>
                                <input value="{{ $service->DESCRIPCION }}" name="desc" type="text" class="form-control" id="desc">
                        </div>
                        <div class="form-group">
                            <label for="rol">@lang('form.addressedTo')</label>
                            <select name="rol" class="form-control">
                                @if ($service->ROL == '0')
                                    <option value="0" selected>@lang('services.teachers')</option>
                                    <option value="1">@lang('services.students')</option>
                                @else
                                    <option value="0">@lang('services.teachers')</option>
                                    <option value="1" selected>@lang('services.students')</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">@lang('services.newFile')</label>
                            <input name="file" type="file" class="form-control" id="file" aria-describedby="helpFile">
                            <span id="helpFile" class="help-block">@lang('services.newFileHelp')</span>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" class="btn btn-primary">@lang('form.save')</button>
                    </form>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection