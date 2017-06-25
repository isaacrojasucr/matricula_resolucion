@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.course') {{ $course->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/cursos') }}" title="Back">
                            <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button>
                        </a>
                        <a href="{{ url('/admin/cursos/' . $course->id . '/edit') }}" class="btn btn-primary btn" title=@lang('form.edit') >
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/cursos', $course->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn',
                                    'title' => trans('delete'),
                                    'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th>@lang('form.carrer')</th><td> {{ $carrer->name }}  </td></tr>
                                    <tr><th>@lang('form.name') </th><td> {{ $course->name }} </td></tr>
                                    <tr><th>@lang('form.initial')</th><td> {{ $course->initial }} </td></tr>
                                    <tr><th>@lang('form.period')</th><td> {{ $course->period }} </td></tr>
                                    <tr><th>@lang('form.cycle')</th><td> {{ $course->cycle }} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
