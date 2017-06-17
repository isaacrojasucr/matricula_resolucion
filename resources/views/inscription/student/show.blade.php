@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>
                            @lang('form.infoInserted')
                        </label>
                    </div>

                    <div class="panel-body">
                        <div class="well">
                            <div class="col-md-6">
                                <label >
                                    INFORMACIÓN PERSONAL
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    @lang('form.average')
                                </label>
                                <label class="form-control">
                                    {{$personal[4]}}
                                </label>
                            </div>
                            <hr style="width:100%;">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.carne')
                                    </label>
                                    <label class="form-control">
                                        {{$personal[0]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.name')
                                    </label>
                                    <label class="form-control">
                                        {{$personal[1]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.phone')
                                    </label>
                                    <label class="form-control">
                                        {{$personal[2]}}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        @lang('form.email')
                                    </label>
                                    <label class="form-control">
                                        {{$personal[3]}}
                                    </label>
                                </div>
                            </div>


                        </div>
                        </br>

                        <div class="well">
                            <label>
                                INFORMACIÓN DE MATRÍCULA
                            </label>
                            <hr style="width:100%;">

                            <div class="form-group">
                                <label>
                                    @lang('form.career')
                                </label>
                                <label class="form-control">
                                    {{$career}}
                                </label>
                            </div>

                            <div class="form-group">
                                <table class="table table-hover" id="tabla" name="tabla">
                                    <thead>
                                        <tr>
                                            <th>@lang('form.courses')</th>
                                            <th>@lang('form.group')</th>
                                            <th>@lang('form.location')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($inscript as $item)
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

            </div>
        </div>
    </div>
    </div>
@endsection