@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['route' => 'matricula.store', 'method' => 'post']) !!}

                <div class="form-group" style="height: 79px;">
                    <div class="col-md-6">
                        <img src="/img/logoUCR.png" class="img-responsive" style="width: 200px; height: 65px;">
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="col-md-6">
                            {!! Form::label('',''.trans('form.average') ) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::number('weightedAverage', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group center">
                    {!! Form::label('', ''.trans('form.headInscription')) !!}
                    </br>
                    {!! Form::label('', ''.trans('form.oficio')) !!}
                </div>

                <hr style="width:100%;">

                <div class="form-group">

                    <div class="col-md-3">
                        {!! Form::label('', ''.trans('form.studentName')) !!}
                    </div>
                    <div class="col-md-9">
                        {!! Form::text('studentName', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder'=>''.trans('form.studentName')]) !!}
                    </div>

                </div>
                </br>
                <hr style="width:100%;">

                <div class="form-group">
                    <div class="col-md-4">
                        <div class="col-md-6">

                            {!! Form::label('', ''.trans('form.carne')) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('studentId', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder'=>''.trans('form.carne')]) !!}
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="col-md-4">

                            {!! Form::label('', ''.trans('form.phone')) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::number('phone', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder'=>''.trans('form.phone')]) !!}
                        </div>
                    </div>
                </div>
                </br>
                <hr style="width:100%;">

                <div class="form-group">

                    <div class="col-md-3">
                        {!! Form::label('', ''.trans('form.email')) !!}
                    </div>
                    <div class="col-md-9">
                        {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder'=>''.trans('form.email')]) !!}
                    </div>

                </div>
                </br>
                <hr style="width:100%;">

                <div class="form-group">

                    <div class="col-md-3">
                        {!! Form::label('', ''.trans('form.courses')) !!}
                    </div>
                    <div class="col-md-9">
                        {!! Form::select('carrer', $course, null,['class' => 'form-control']) !!}
                    </div>

                </div>
                </br>
                <hr style="width:100%;">

                <div class="form-group">
                    <div class="col-md-4">
                        <div class="col-md-3">
                            {!! Form::label('', ''.trans('form.group')) !!}
                        </div>
                        <div class="col-md-9">
                            {!! Form::number('group', null, ['class' => 'form-control' ]) !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-6">
                            {!! Form::label('', ''.trans('form.timesAttended')) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::number('timesAttended', null, ['class' => 'form-control' ]) !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button type="button" class="btn btn-info col-md-12" onclick="genera_tabla()"> @lang('form.add')
                        </button>
                    </div>


                </div>
                </br>
                <hr style="width:100%;">

                <div class="form-group">
                    <div class="well">
                        <table class="table table-hover" id="tabla" name="tabla">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>@lang('form.courses')</th>
                                <th>@lang('form.group')</th>
                                <th>@lang('form.timesAttended')</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>


                </div>
                </br>
                <hr style="width:100%;">


                <div class="form-group center">
                    </br>
                    {!! Form::submit(''.trans('form.save'), ['class' => 'btn btn-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection