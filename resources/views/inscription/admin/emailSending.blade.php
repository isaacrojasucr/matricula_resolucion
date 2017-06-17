@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.emailSending')</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>'correos.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('',trans('form.emailSender').': ') !!}
                            {!! Form::label('emailSender', ''.$managerEmail, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.emailReceiver').': ') !!}
                            {!! Form::label('emailReceiver', ''.$petition->email, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.emailMotive').': ') !!}
                            {!! Form::text('emailMotive', trans('form.emailMotiveExplained'), ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.emailContent').': ') !!}
                            {!! Form::textarea('emailContent', '', ['class' => 'form-control']) !!}
                        </div>
                        {{ Form::hidden('id', ''.$petition->id) }}
                        {!! Form::submit(trans('form.send'), ['class'=>'btn btn-primary col-md-12']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection