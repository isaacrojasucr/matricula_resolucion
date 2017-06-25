@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading center">
                        @lang('form.searchOld')
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/antiguas', 'class' => 'form-horizontal', 'files' => true]) !!}

                        <div class="well">
                            <div class="form-group center">
                                <div class="col-md-12" style="padding: 0px">
                                    {!! Form::label('', ''.trans('form.insertID')) !!}
                                </div>

                                <div class="col-md-12 center" style="padding: 0px">
                                    {!! Form::text('id', null, ['class' => 'form-control center' , 'required' => 'required', 'placeholder'=>''.trans('form.idFormat')]) !!}
                                </div>

                                <div class="col-md-12" style="padding: 0px; padding-top: 25px;">
                                    {!! Form::submit(trans('form.search'), ['class'=>'btn btn-primary col-md-12']) !!}
                                </div>
                            </div>

                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection