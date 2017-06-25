@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">@lang('form.editCourse') {{ $course->name}}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/cursos') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn">
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                                @lang('form.back')
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

                        {!! Form::model($course, [
                            'method' => 'PATCH',
                            'url' => ['/admin/cursos', $course->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('course.course.form', ['submitButtonText' => ''.trans('form.update')])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
