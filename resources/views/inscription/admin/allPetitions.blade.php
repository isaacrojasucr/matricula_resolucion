@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                @lang('form.actualPetitions')
            </div>

            <div class="panel-body">
                <ul class="nav nav-tabs" id="tabs" data-tabs="tabs" style="text-align: center">
                    <li class="active"><a href="#approvals" data-toggle="tab">@lang('form.approval')</a></li>
                    <li><a href="#rejected" data-toggle="tab">@lang('form.reject')</a></li>
                    <li><a href="#pending" data-toggle="tab">@lang('form.pending')</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="approvals">
                        <br/>
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
                                    <td>@lang('form.carne')</td>
                                    <td>@lang('form.carrer')</td>
                                    <td>@lang('form.course')</td>
                                    <td>@lang('form.group')</td>
                                    <td>@lang('form.location')</td>
                                    <td>@lang('form.average')</td>
                                    <td>@lang('form.phone')</td>
                                    <td>@lang('form.email')</td>
                                    <td>@lang('form.act')</td>
                                </tr>
                                </thead>
                                @foreach($inscriptionApp as $item)

                                    <tr>
                                        <td>{{$item->studentId}}</td>
                                        <td>{{$item->fk_career}}</td>
                                        <td>{{$item->fk_course}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>{{$item->fk_location}}</td>
                                        <td>{{$item->weightedAverage}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <a href="{{ url('/admin/matricula/aceptar/'.$item->id)}}"  class="btn btn-sm btn-success" title=@lang('form.accept')>
                                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                            </a>

                                            <a href="{{ url('/general/correos/'.$item->id) }}" class="btn btn-sm btn-danger" title=@lang('form.deny')> <span
                                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </a>
                                            <a class="btn btn-sm btn-warning" title=@lang('form.edit')> <span
                                                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="rejected">
                        <br/>
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
                                    <td>@lang('form.carne')</td>
                                    <td>@lang('form.carrer')</td>
                                    <td>@lang('form.courses')</td>
                                    <td>@lang('form.group')</td>
                                    <td>@lang('form.location')</td>
                                    <td>@lang('form.average')</td>
                                    <td>@lang('form.phone')</td>
                                    <td>@lang('form.email')</td>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($inscriptionRej as $item)

                                    <tr>
                                        <td>{{$item->studentId}}</td>
                                        <td>{{$item->fk_career}}</td>
                                        <td>{{$item->fk_course}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>{{$item->fk_location}}</td>
                                        <td>{{$item->weightedAverage}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="pending">
                        <br/>
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
                                    <td>@lang('form.carne')</td>
                                    <td>@lang('form.carrer')</td>
                                    <td>@lang('form.courses')</td>
                                    <td>@lang('form.group')</td>
                                    <td>@lang('form.location')</td>
                                    <td>@lang('form.average')</td>
                                    <td>@lang('form.phone')</td>
                                    <td>@lang('form.email')</td>
                                    <td>@lang('form.act')</td>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($inscriptionPen as $item)

                                    <tr>
                                        <td>{{$item->studentId}}</td>
                                        <td>{{$item->fk_career}}</td>
                                        <td>{{$item->fk_course}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>{{$item->fk_location}}</td>
                                        <td>{{$item->weightedAverage}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <a href="{{ url('/admin/matricula/aceptar/'.$item->id)}}"  class="btn btn-sm btn-success" title=@lang('form.accept')>
                                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                            </a>

                                            <a class="btn btn-sm btn-danger" title=@lang('form.deny')>
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </a>

                                        </td>
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


@endsection  