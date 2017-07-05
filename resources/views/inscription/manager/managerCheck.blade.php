@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('form.studentRequestCheck')</div>

                <div class="panel-body">

                    <div class="well">
                        @lang('form.infoManagerCheck1') <button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                        @lang('form.infoManagerCheck2') <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        @lang('form.infoManagerCheck3')
                    </div>



                    <br/>
                    <br/>
                    <div class="table-responsive" style="height: 500px !important;    overflow: scroll;">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th style="max-width: 70px">@lang('form.name')</th>
                                <th>@lang('form.carne')</th>
                                <th>@lang('form.courseName')</th>
                                <th style="max-width: 35px">@lang('form.timesAttended')</th>
                                <th>@lang('form.phone')</th>
                                <th>@lang('form.observation')</th>
                                <th>@lang('form.act')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < count($petitions); $i++)

                                <tr>
                                    <td class="cell">{{ $petitions[$i]->studentName }}</td>
                                    <td class="cell">{{ $petitions[$i]->studentId }}</td>
                                    <td class="cell">{{ $courses[$i]->name}}</td>
                                    <td class="cell">{{ $petitions[$i]->timesAttended}}</td>
                                    <td class="cell">{{ $petitions[$i]->phone }}</td>
                                    <td class="cell">{{ $petitions[$i]->observations}}</td>

                                    <td>
                                        <a href="{{ url('/proceso/coordinador/aceptar/'.$petitions[$i]->id)}}" title= @lang('form.accept') ><button class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a>
                                        <a href="{{ url('/general/correos/'.$petitions[$i]->id) }}" title= @lang('form.deny') ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                                    </td>
                                </tr>
                            @endfor

                            </tbody>
                        </table>
                        <div class="pagination-wrapper">  </div>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection