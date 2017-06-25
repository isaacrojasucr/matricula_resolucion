@extends('layouts.app')

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        @lang('form.oldPetitions')
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr style="font-weight: bold">
                                        <td >@lang('form.year')</td>
                                        <td >@lang('form.period')</td>
                                        <td >@lang('form.course')</td>
                                        <td >@lang('form.location')</td>
                                        <td >@lang('form.state')</td>
                                        <td >@lang('form.comments')</td>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->anno}}</td>
                                        <td>{{$item->period}}</td>
                                        <td>{{$item->course}}</td>
                                        <td>{{$item->location}}</td>
                                        <td>
                                            @if($item->state == 1)
                                                @lang('form.denyManager')
                                            @elseif($item->state == 2)
                                                @lang('form.acceptManager')
                                            @elseif($item->state == 3)
                                                @lang('form.denyAdmin')
                                            @elseif($item->state == 4)
                                                @lang('form.acceptAdmin')
                                            @elseif($item->state == 5)
                                                @lang('form.denyLocation')
                                            @elseif($item->state == 5)
                                                @lang('form.acceptLocation')
                                            @else
                                                @lang('form.pending')
                                            @endif
                                        </td>
                                        <td>{{$item->comments}}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection