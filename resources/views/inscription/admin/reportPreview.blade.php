@extends('layouts.app')

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group center">

                    @for($i = 0; $i < count($central); $i++)

                        <div class="well center" style="background: white">
                            @if($id == 1)
                            <label>@lang('form.school')= "{{$careers[$i]->schools}}"</label>
                            @else
                                <label>@lang('form.carrer')= "{{$careers[$i]}}"</label>
                            @endif
                            <hr style="width:100%;">
                            </br>

                            <div class="table-responsive">
                                <table class="table table-striped" >
                                    <thead>
                                        <tr style="font-weight: bold">
                                            <td>@lang('form.carne')</td>
                                            <td>@lang('form.name')</td>
                                            <td>@lang('form.average')</td>
                                            <td>@lang('form.course')</td>
                                            <td>@lang('form.group')</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($central[$i] as $item )
                                            <tr>
                                                <td>{{$item->carne}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->average}}</td>
                                                <td>{{$item->course}}</td>
                                                <td>{{$item->group}}</td>
                                                <td>{{$item->times}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        </br>

                    @endfor

                    <div class="center">
                        <a class="btn btn-success col-md-6 col-md-offset-3" href="{{url('/pdf/sedes/'.$id)}}"> Exportar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection