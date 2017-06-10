@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.editCourse') {{ $course->name}}</div>
                    <div class="panel-body">

                        <a href="{{ url('/course/course') }}" title=@lang('form.back')>
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
                            'url' => ['/course/course', $course->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('course.course.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
