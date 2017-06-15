@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    <div class="form-group">
                        <div>
                            <div class="center">
                                <h3>@lang('form.selectCareer')</h3>
                            </div>

                            </br></br>

                            <div class="col-md-offset-4">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button"
                                            data-toggle="dropdown">@lang('form.careersdep')
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach($careers as $item)
                                            <li>
                                                <a href="{{url('/matricula/carrera/'.$item->id)}}">{{$item->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection