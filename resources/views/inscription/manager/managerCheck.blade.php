@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('form.studentRequestCheck')</div>

                <div class="panel-body">

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>@lang('form.name')</th>
                                <th>@lang('form.carne')</th>
                                <th>@lang('form.courseName')</th>
                                <th>@lang('form.timesAttended')</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection