@extends('layouts.app')

@section('content')

    <script type="text/javascript">
        window.onload = function () {

            first(5, 10);
            second(2,3,4,1,5,2,3,1,2,20);
        };

    </script>

    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary center">
                    <div class="panel-heading">@lang('form.processInfo')</div>
                    <div class="panel-body" style="text-align: left;">

                        <div class="col-md-9">
                            <div id="canvas-holder">
                                <canvas id="chart-area2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-md-3">
                            algunos datos importantes.
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary center">
                    <div class="panel-heading">@lang('form.managerSum')</div>
                    <div class="panel-body">
                        <div class="col-md-9">
                            <div id="canvas-holder">
                                <canvas id="chart-area" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-md-3">
                            algunos datos importantes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
