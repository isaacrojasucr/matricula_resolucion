@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.studentRequest')</div>
                    <div class="panel-body">
                        {!! Form::open(['route'=>'consultas/pregunta', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('',trans('form.studentConsultationInstructions').': ') !!}
                            {!! Form::text('carne', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderConsult'), 'required'=>'required']) !!}
                        </div>
                        {!! Form::submit(trans('form.consult'), ['class'=>'btn btn-primary col-md-12']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @if($answer != null)
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('form.goodNews').{{ $answer[$i]->studentId }}</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>@lang('form.course')</th>
                                        <th>@lang('form.group')</th>
                                        <th>@lang('form.location')</th>
                                        <th>@lang('form.state')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($i = 0; $i < count($answer); $i++)
                                        <tr>
                                            <td>{{ $answer[$i]->name }}</td>
                                            <td>{{ $answer[$i]->lastname }}</td>
                                            <td>{{ $answer[$i]->email }}</td>
                                            <td>{{ $answer[$i]->email }}</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @elseif(count($answer) != 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('form.consultAnswer')</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <h3 class="label-danger">trans('form.badNews')</h3>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
