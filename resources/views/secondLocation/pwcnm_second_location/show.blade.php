@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.location')</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/sedes') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn">
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button></a>

                        <a href="{{ url('/admin/sedes/' . $pwcnm_second_location->id . '/edit') }}" title=@lang('form.edit')>
                            <button class="btn btn-primary btn">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </button>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/sedes', $pwcnm_second_location->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger ',
                                    'title' => ''.trans('form.delete'),
                                    'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>@lang('form.id')</th><td>{{ $pwcnm_second_location->id }}</td>
                                    </tr>
                                    <tr><th> @lang('form.name') </th><td> {{ $pwcnm_second_location->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
