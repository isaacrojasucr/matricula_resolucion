@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.carrer') {{ $carrer->name}}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/carreras') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button>
                        </a>
                        <a href="{{ url('/admin/carreras/' . $carrer->id . '/edit') }}" title=@lang('form.edit')>
                            <button class="btn btn-primary ">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </button>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/carreras', $carrer->id],
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
                                    <tr><th> @lang('form.initial')</th><td> {{ $carrer->initial }} </td></tr>
                                    <tr><th> @lang('form.name') </th><td> {{ $carrer->name }} </td></tr>
                                    <tr><th> @lang('form.page')</th><td> {{ $carrer->page }} </td></tr>
                                    <tr><th> @lang('form.manager')</th><td> {{ $manager->name.' '.$manager->lastname }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
