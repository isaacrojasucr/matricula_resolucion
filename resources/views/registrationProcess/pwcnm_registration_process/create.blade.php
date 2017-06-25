@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.createProcess')</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/procesos') }}" title=@lang('form.back')>
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

                        {!! Form::open(['url' => '/admin/procesos', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('registrationProcess.pwcnm_registration_process.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
