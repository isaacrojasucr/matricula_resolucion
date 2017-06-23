@extends('layouts.app')

@section('content')

    <div id="content" class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.studentRequest')</div>
                    <div class="panel-body">
                        {!! Form::open(['route'=>'consultas/pregunta', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('',trans('form.studentConsultationInstructions').': ') !!}
                            {!! Form::text('carne', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderConsult'), 'required'=>'required']) !!}
                        </div>
                        {!! Form::submit(trans('form.consult'), ['class'=>'btn btn-primary col-md-12']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
