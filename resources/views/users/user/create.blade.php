@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.createUser')</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/usuarios') }}" title="Back">
                            <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-circle-arrow-left"
                                      aria-hidden="true"></span> @lang('form.back')
                            </button>
                        </a>
                        <br/>
                        <br/>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['route'=>'usuarios.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('', trans('form.name').': ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderName'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.lastname').': ') !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderLastName'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.email').': ') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderEmail'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('', trans('form.password').': ') !!}
                            {!! Form::password('password',['class' => 'form-control', 'placeholder'=>trans('form.holderPassword'), 'required'=>'required']) !!}
                        </div>
                        {!! Form::submit(trans('form.register'), ['class'=>'btn btn-primary col-md-12']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop