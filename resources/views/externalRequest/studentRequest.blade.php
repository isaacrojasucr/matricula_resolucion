@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.studentRequest')</div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('',trans('form.studentConsultationInstructions').': ') !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderConsult'), 'required'=>'required']) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
