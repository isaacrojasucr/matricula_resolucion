@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('sections.editSection')</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/secciones') }}" title=@lang('form.back')>
                        <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                        </button>
                    </a>
                    <br />
                    <br />
                    
                    @foreach ($listSection as $section)

                    <form action="{{ url('/admin/secciones/editar/' . $section->ID_SECCION . '/edit') }}" method="GET">
                        <div class="form-group">
                            <label for="name">@lang('form.name')</label>
                            <input value="{{ $section->NOMBRE }}" name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="name">@lang('form.manager')</label>
                            <select name="inCharge" class="form-control">
                                @foreach ($listUser as $user)
                                    @if ($section->id == $user->id)
                                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                    @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('form.save')</button>
                    </form>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection