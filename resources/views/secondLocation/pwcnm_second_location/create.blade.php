@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9  col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.createLocation')</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/sedes') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn">
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

                        {!! Form::open(['url' => '/admin/sedes', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('secondLocation.pwcnm_second_location.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
