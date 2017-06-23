@extends('layouts.app')

@section('content')

    <div id="content" class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
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
            <div class="row">

                <div class="col-md-2 col-md-offset-5">
                    <a href="{{ url('/consulta/estudiante') }}" title=@lang('form.newQuestion')>
                        <button class="btn btn-primary">@lang('form.newQuestion')</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection