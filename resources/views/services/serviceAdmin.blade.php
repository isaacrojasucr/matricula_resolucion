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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('services.services')</h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSection" id="buttonTable">
                        @lang('form.add')
                    </button>
                    @if ($listService != null)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('form.name')</th>
                                    <th>@lang('form.description')</th> 
                                    <th>@lang('form.addressedTo')</th>
                                    <th>@lang('form.act')</th>
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
                                    <td>
                                        <a title=@lang('form.edit') class="btn btn-primary btn-xs" href="{{ url('/admin/servicios/editar/' . $service->ID_SERVICIO) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a title=@lang('form.delete') class="btn btn-danger btn-xs" href="{{ url('admin/servicios/eliminar/' . $service->ID_SERVICIO) }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                        <a title=@lang('form.download') class="btn btn-warning btn-xs" href="{{ url('/download/' . $service->ARCHIVO) }}" role="button"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>@lang('services.noServices')</strong>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="addSectionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">@lang('services.addService')</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/servicios/agregar') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">@lang('form.name')</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="@lang('form.name')">
                    </div>
                    <div class="form-group">
                        <label for="desc">@lang('form.description')</label>
                        <input name="desc" type="text" class="form-control" id="desc" placeholder="@lang('form.description')">
                    </div>
                    <div class="form-group">
                        <label for="rol">@lang('form.addressedTo')</label>
                        <select name="rol" class="form-control">
                            <option value="0">@lang('form.teachers')</option>
                            <option value="1">@lang('form.students')</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">@lang('form.file')</label>
                        <input name="file" type="file" class="form-control" id="file">
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