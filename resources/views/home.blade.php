@extends('layouts.app')

@section('content')

    <input id ="rest" type="hidden" value="{{$process->rest}}">
    <input id ="spent" type="hidden" value="{{$tt->ready}}">
    <input id ="tt" type="hidden" value="{{$tt->ready}}">
    <input id ="ii" type="hidden" value="{{$ii->ready}}">
    <input id ="ie" type="hidden" value="{{$ie->ready}}">
    <input id ="ef" type="hidden" value="{{$ef->ready}}">
    <input id ="ecn" type="hidden" value="{{$ecn->ready}}">
    <input id ="rn" type="hidden" value="{{$rn->ready}}">
    <input id ="ri" type="hidden" value="{{$ri->ready}}">
    <input id ="lq" type="hidden" value="{{$lq->ready}}">
    <input id ="em" type="hidden" value="{{$em->ready}}">
    <input id ="te" type="hidden" value="{{$te->ready}}">


    <script type="text/javascript">
        window.onload = function () {

            var rest = parseInt(document.getElementById("rest").value);
            var spent = parseInt(document.getElementById("spent").value);
            first( spent , rest);

            var tt = parseInt(document.getElementById("tt").value);
            var ii = parseInt(document.getElementById("ii").value);
            var ie = parseInt(document.getElementById("ie").value);
            var ef = parseInt(document.getElementById("ef").value);
            var ecn = parseInt(document.getElementById("ecn").value);
            var rn = parseInt(document.getElementById("rn").value);
            var ri = parseInt(document.getElementById("ri").value);
            var lq = parseInt(document.getElementById("lq").value);
            var em = parseInt(document.getElementById("em").value);
            var te = parseInt(document.getElementById("te").value);

            second( ii, ie, em, rn, ecn, lq, ef, ri, te, tt);
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
