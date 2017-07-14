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
                    <h3 class="panel-title">@lang('sections.sections')</h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSection"
                            id="buttonTable">
                        @lang('form.add')
                    </button>
                    @if ($listSection != null)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('form.name')</th>
                                <th>@lang('form.manager')</th>
                                <th>@lang('form.email')</th>
                                <th>@lang('form.phone')</th>
                                <th>@lang('form.act')</th>
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
                                        <a title=@lang('form.edit') class="btn btn-primary btn-xs"
                                        href="{{ url('/admin/secciones/editar/' . $section->ID_SECCION) }}"
                                        role="button"><span
                                                class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a title=@lang('form.delete') class="btn btn-danger btn-xs"
                                        href="{{ url('/admin/secciones/eliminar/' . $section->ID_SECCION) }}"
                                        role="button"><span class="glyphicon glyphicon-trash"
                                                            aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>@lang('sections.noSections')</strong>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Section Modal -->
<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="addSectionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addSectionLabel">@lang('sections.addSection')</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/secciones/agregar') }}" method="GET">
                    <div class="form-group">
                        <label for="name">@lang('form.name')</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="@lang('form.name')">
                    </div>
                    <div class="form-group">
                        <label for="name">@lang('form.manager')</label>
                        <select name="inCharge" class="form-control">
                            @foreach ($listUser as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
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