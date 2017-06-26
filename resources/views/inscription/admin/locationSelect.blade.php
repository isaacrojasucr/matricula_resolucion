@extends('layouts.app')

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    <div class="form-group">
                        <div>
                            <div class="center">
                                <h3>@lang('form.locationReport')</h3>
                            </div>

                            </br></br>

                            <div class="col-md-offset-4">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button"
                                            data-toggle="dropdown">@lang('form.selectLocation')
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu" style="background-color: white;">
                                        @foreach($locations as $item)
                                            @if($item->id != 2)
                                                <li>
                                                    @if($item->id ==1)
                                                        <a href="{{url('/reportes/facio')}}"
                                                           style="background-color: white">{{$item->name}}</a>
                                                    @else
                                                        <a href="{{url('/admin/reportes/sede/'.$item->id)}}"
                                                           style="background-color: white">{{$item->name}}</a>
                                                    @endif
                                                </li>
                                            @endif
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