@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
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
                                <th>@lang('form.phone')</th>
                                <th>@lang('form.observation')</th>
                                <th>@lang('form.act')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < count($petitions); $i++)

                                <tr>
                                    <td>{{ $petitions[$i]->studentName }}</td>
                                    <td>{{ $petitions[$i]->studentId }}</td>
                                    <td>{{ $courses[$i]->name}}</td>
                                    <td>{{ $petitions[$i]->timesAttended}}</td>
                                    <td>{{ $petitions[$i]->phone }}</td>
                                    <td>{{ $petitions[$i]->observations}}</td>

                                    <td>
                                        <a title= @lang('form.accept') ><button class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a>
                                        <a href="{{ url('/asd/ads' . $petitions[$i]->email) }}" title= @lang('form.deny') ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection