@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading center">
                        <label>
                            @lang('form.infoInserted')
                        </label>
                    </div>

                    <div class="panel-body">
                        <label>
                            @lang('form.personalData')
                        </label>
                        <div class="well">

                            <div class="col-md-6" style="padding: 0px">
                                <div class="form-group">
                                    <label>
                                        @lang('form.carne')
                                    </label>
                                    <label class="form-control">
                                        {{session()->get('personal')[0]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.name')
                                    </label>
                                    <label class="form-control">
                                        {{session()->get('personal')[1]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6" style="padding: 0px">
                                <div class="form-group">
                                    <label>
                                        @lang('form.phone')
                                    </label>
                                    <label class="form-control">
                                        {{session()->get('personal')[2]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.email')
                                    </label>
                                    <label class="form-control">
                                        {{session()->get('personal')[3]}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    @lang('form.average')
                                </label>
                                <label class="form-control" style="width: 50%;">
                                    {{session()->get('personal')[4]}}
                                </label>
                            </div>
                        </div>

                        <hr style="width:100%;">
                        <label>
                            @lang('form.inscriptionData')
                        </label>
                        <div class="well">
                            <div class="form-group">
                                <label>
                                    @lang('form.carrer')
                                </label>
                                <label class="form-control">
                                    {{session()->get('career')}}
                                </label>
                            </div>
                            <div class="well" style="background-color: white">
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tabla" name="tabla">
                                            <thead>
                                            <tr>
                                                <th style="width: 50%">@lang('form.courses')</th>
                                                <th style="width: 25%">@lang('form.group')</th>
                                                <th style="width: 25%">@lang('form.location')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(session()->get('inscript') as $item)
                                                <tr>
                                                    <th>{{$item[1]}}</th>
                                                    <th>{{$item[2]}}</th>
                                                    <th>{{$item[0]}}</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr style="width:100%;">
                        <div class="center">
                            <a href="{{url('/matricula/reporte/estudiante')}}" class="btn btn-primary">Exportar comprobante</a>
                        </div>

                        <hr style="width:100%;">

                        <label class="center">
                            @lang('form.promotionalConsult')
                        </label>


                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection