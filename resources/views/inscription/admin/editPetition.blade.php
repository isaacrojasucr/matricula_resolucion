@extends('layouts.app')

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        @lang('form.petitionInfo')
                    </div>
                    <div class="panel-body">
                        {!! Form::model($petition, [
                            'method' => 'PATCH',
                            'url' => ['/admin/matricula', $petition->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        <div class="col-md-12 ">

                            <div class="form-group">
                                {!! Form::label('', trans('form.location').': ' ,['class' => 'col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('location', $location, ['class' => 'form-control ', 'readonly'=>'true']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('', trans('form.carrer').': ',['class' => 'col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('carrer', $career, ['class' => 'form-control', 'readonly'=>'true']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('', trans('form.course').': ',['class' => 'col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('course', $course, ['class' => 'form-control', 'readonly'=>'true']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('', trans('form.average').': ',['class' => 'col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::number('weightedAverage', null, ['class' => 'form-control','required'=>'required', 'step'=>'any']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('', trans('form.group').': ',['class' => 'col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::number('group', null, ['class' => 'form-control', 'required'=>'required', 'step'=>'any']) !!}
                                </div>
                            </div>

                        </div>

                        {!! Form::submit(trans('form.update'), ['class'=>'btn btn-primary col-md-12']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  