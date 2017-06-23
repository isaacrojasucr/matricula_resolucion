@extends('layouts.app')

@section('content')

    <div id="content" class="container">
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
                @if($answer == null)

                @elseif(count($answer) == 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('form.consultAnswer')</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <h3>@lang('form.badNews')</h3>
                                </table>
                            </div>
                        </div>
                    </div>

                @elseif($answer != null)
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('form.goodNews') {{ $answer[0]->studentId }}</div>
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
                                            <td>{{ $answer[$i]->course }}</td>
                                            <td>{{ $answer[$i]->group }}</td>
                                            <td>{{ $answer[$i]->location }}</td>
                                            <td>
                                                @if($answer[$i]->stade == 0)
                                                    @lang('form.pending')
                                                @elseif($answer[$i]->stade == 1)
                                                    @lang('form.denyManager')
                                                @elseif($answer[$i]->stade == 2)
                                                    @lang('form.acceptManager')

                                                @elseif($answer[$i]->stade == 3)
                                                    @lang('form.denyAdmin')

                                                @elseif($answer[$i]->stade == 4)
                                                    @lang('form.acceptAdmin')

                                                @elseif($answer[$i]->stade == 5)
                                                    @lang('form.denyLocation')

                                                @elseif($answer[$i]->stade == 6)
                                                    @lang('form.acceptLocation')
                                                @endif
                                            </td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>

@endsection
