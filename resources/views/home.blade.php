@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary center">
                    <div class="panel-heading">@lang('form.processInfo')</div>
                    <div class="panel-body" style="text-align: left;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4>@lang('form.actualProcessState'):</h4>
                                <hr style="width:100%;">
                                <h4>@lang('form.periodQuestion'):</h4>
                                <hr style="width:100%;">
                            </div>
                            <div class="col-md-6">
                                <h4></h4>
                                <hr style="width:100%;">
                                <h4></h4>
                                <hr style="width:100%;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary center">
                    <div class="panel-heading">@lang('form.managerSum')</div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
