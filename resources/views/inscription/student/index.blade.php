@extends('layouts.app')

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    <div class="form-group">
                        <div>
                            @if($daysLeft > 0 )
                                <div class="center">
                                    <h3>@lang('form.selectCareer')</h3>
                                </div>

                                </br></br>

                                <div class="col-md-offset-4">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button"
                                                data-toggle="dropdown">@lang('form.careersdep')
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="background-color: white;">
                                            @foreach($careers as $item)
                                                <li>
                                                    <a href="{{url('/matricula/carrera/'.$item->id)}}" style="background-color: white">{{$item->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <div class="center">
                                    <h2>@lang('form.noProcess')</h2>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection