@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="content">
        <div class="row">
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
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr style="font-weight: bold">
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
                                        <tbody>
                                        @foreach($inscriptionApp as $item)

                                            <tr>
                                                <td>{{$item->carne}}</td>
                                                <td>{{$item->career}}</td>
                                                <td>{{$item->course}}</td>
                                                <td>{{$item->group}}</td>
                                                <td>{{$item->location}}</td>
                                                <td>{{$item->average}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                    @if($item->state == 6)
                                                        <a href="#" class="btn btn-sm btn-default">
                                                            @lang('form.approveby')
                                                        </a>

                                                    @elseif($item->state == 2)
                                                        <a href="{{ url('/admin/matricula/aceptar/'.$item->id)}}"
                                                           class="btn btn-sm btn-success" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           data-toggle="tooltip"
                                                           title="@lang('form.acceptbydeparment')">
                                                                <span class="glyphicon glyphicon-ok"
                                                                      aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ url('/general/correos/'.$item->id) }}"
                                                           class="btn btn-sm btn-danger"
                                                           data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="@lang('form.deny')"> <span
                                                                    class="glyphicon glyphicon-remove"
                                                                    aria-hidden="true"></span>
                                                        </a>


                                                        <button type="button" class="btn btn-sm btn-primary"
                                                                title="@lang('form.avgAndReq')"

                                                                data-toggle="modal"
                                                                data-target="#myModal{{$item->id}}">
                                                            <span class="glyphicon glyphicon-list-alt"
                                                                  aria-hidden="true"></span>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal{{$item->id}}" tabindex="-1"
                                                             role="dialog" aria-labelledby="addSectionLabel">
                                                            <div class="modal-dialog" role="document">

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">@lang('form.avgAndReq')</h4>
                                                                    </div>
                                                                    <div class="modal-body bg-modal">
                                                                        <label>@lang('form.average')</label>: {{$item->average}}

                                                                        </br>
                                                                        <label>@lang('form.req')</label>
                                                                        </br>
                                                                        @if(count($item->req) != 0)
                                                                            @foreach($item->req as $req)
                                                                                {{$req->course}} / @lang('form.result')
                                                                                : {{$req->grade}} / @lang('form.clApp')
                                                                                : {{$req->cycle}}</br>
                                                                            @endforeach

                                                                        @else
                                                                            @lang('form.noReq')
                                                                        @endif

                                                                        <labe>@lang('form.comments')</labe>: {{$item->observations}}

                                                                    </div>
                                                                    <div class="modal-footer ">
                                                                        <a class="btn btn-warning"
                                                                           data-toggle="tooltip"
                                                                           data-placement="bottom"
                                                                           title="@lang('form.edit')"
                                                                           href="{{url('/admin/matricula/'.$item->id.'/edit')}}">

                                                                            <span class="glyphicon glyphicon-edit"
                                                                                  aria-hidden="true"></span>

                                                                        </a>

                                                                        <button type="button" class="btn btn-default"
                                                                                data-dismiss="modal">@lang('form.close')</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @elseif($item->state == 4)
                                                        <a href="{{ url('/admin/matricula/aceptar/'.$item->id)}}"
                                                           class="btn btn-sm btn-info" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="@lang('form.acceptbylocation')">
                                                                <span class="glyphicon glyphicon-ok"
                                                                      aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ url('/general/correos/'.$item->id) }}"
                                                           class="btn btn-sm btn-danger"
                                                           data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="@lang('form.deny')">
                                                                <span class="glyphicon glyphicon-remove"
                                                                      aria-hidden="true"></span>
                                                        </a>




                                                        <button type="button" class="btn btn-sm btn-primary"
                                                                title="@lang('form.avgAndReq')"
                                                                data-toggle="modal"
                                                                data-target="#myModal{{$item->id}}">
                                                            <span class="glyphicon glyphicon-list-alt"
                                                                  aria-hidden="true"></span>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal{{$item->id}}" tabindex="-1"
                                                             role="dialog" aria-labelledby="addSectionLabel">
                                                            <div class="modal-dialog" role="document">

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">@lang('form.avgAndReq')</h4>
                                                                    </div>
                                                                    <div class="modal-body bg-modal">
                                                                        <label>@lang('form.average')</label>: {{$item->average}}

                                                                        </br>
                                                                        <label>@lang('form.req')</label>
                                                                        </br>
                                                                        @if(count($item->req) != 0)
                                                                            @foreach($item->req as $req)
                                                                                {{$req->course}} / @lang('form.result')
                                                                                : {{$req->grade}} / @lang('form.clApp')
                                                                                : {{$req->cycle}}</br>
                                                                            @endforeach

                                                                        @else
                                                                            @lang('form.noReq')
                                                                        @endif

                                                                        <labe>@lang('form.comments')</labe>: {{$item->observations}}

                                                                    </div>
                                                                    <div class="modal-footer bg-modal">
                                                                        <a class="btn btn-warning"
                                                                           data-toggle="tooltip"
                                                                           data-placement="bottom"
                                                                           title="@lang('form.edit')"
                                                                           href="{{url('/admin/matricula/'.$item->id.'/edit')}}">

                                                                            <span class="glyphicon glyphicon-edit"
                                                                                  aria-hidden="true"></span>

                                                                        </a>

                                                                        <button type="button" class="btn btn-default"
                                                                                data-dismiss="modal">@lang('form.close')</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @else

                                                    @endif


                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="rejected">
                                <br/>
                                <div class="form-horizontal">
                                    <table class="table table-responsive table-striped">
                                        <thead>
                                        <tr style="font-weight: bold">
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
                                                <td>{{$item->carne}}</td>
                                                <td>{{$item->career}}</td>
                                                <td>{{$item->course}}</td>
                                                <td>{{$item->group}}</td>
                                                <td>{{$item->location}}</td>
                                                <td>{{$item->average}}</td>
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
                                        <tr style="font-weight: bold">
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
                                                <td>{{$item->carne}}</td>
                                                <td>{{$item->career}}</td>
                                                <td>{{$item->course}}</td>
                                                <td>{{$item->group}}</td>
                                                <td>{{$item->location}}</td>
                                                <td>{{$item->average}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                    <a href="{{ url('/admin/matricula/aceptar/'.$item->id)}}"
                                                       class="btn btn-sm btn-success" title=@lang('form.accept')>
                                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                    </a>

                                                    <a href="{{ url('/general/correos/'.$item->id) }}"
                                                       class="btn btn-sm btn-danger" title=@lang('form.deny')> <span
                                                                class="glyphicon glyphicon-remove"
                                                                aria-hidden="true"></span>
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
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection  