@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.editing'){{ $carrer-> name }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/carreras') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button>
                        </a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($carrer, [
                            'method' => 'PATCH',
                            'url' => ['/admin/carreras', $carrer->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('carrers.carrer.form', ['submitButtonText' => ''.trans('form.save')])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
