@extends('layouts.app')

@section('content')

    <script type="text/javascript">
        window.onload = function () {

            first(5, 10);
            second(2, 3, 4, 1, 5, 2, 3, 1, 2, 20);
        };

    </script>

    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary center">
                    <div class="panel-heading">@lang('form.processInfo')</div>
                    <div class="panel-body" style="text-align: left;">
                        <div class="col-md-6">
                            <div id="canvas-holder">
                                <canvas id="chart-area2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <h4>@lang('form.actualProcessState'):</h4>
                                <hr style="width:100%;">
                                <h5></h5>
                                <hr style="width:100%;">
                                <h4>@lang('form.periodQuestion'):</h4>
                                <hr style="width:100%;">
                                <h5></h5>
                                <hr style="width:100%;">
                                <h6><span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp;@lang('form.spendedDays')</h6>
                                <h6><span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp;@lang('form.DaysLeft')</h6>
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
                        <div class="col-md-6">
                            <div id="canvas-holder">
                                <canvas id="chart-area" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.informatica')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.ingenieria')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.recursos')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>
                            <h6> <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: red"></span>&nbsp; @lang('form.spendedDays')</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
