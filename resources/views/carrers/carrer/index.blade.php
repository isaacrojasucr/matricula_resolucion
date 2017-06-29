@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-0 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.carrer')</div>
                    <div class="panel-body">

                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#myModal">@lang('form.add')</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                             aria-labelledby="addSectionLabel">
                            <div class="modal-dialog" role="document">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('form.add')</h4>
                                    </div>
                                    <div class="modal-body bg-modal">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">@lang('form.new')</div>
                                            <div class="panel-body">
                                                <br/>
                                                <br/>

                                                {!! Form::open(['url' => '/admin/carreras', 'class' => 'form-horizontal', 'files' => true]) !!}

                                                @include ('carrers.carrer.form')

                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-modal">
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">@lang('form.close')</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {!! Form::open(['method' => 'GET', 'url' => 'admin/carreras', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="@lang('form.search')">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>@lang('form.initial')</th>
                                    <th>@lang('form.name')</th>
                                    <th>@lang('form.page')</th>
                                    <th>@lang('form.manager')</th>
                                    <th>@lang('form.act')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < count($carrer); $i++)
                                    <tr>
                                        <td>{{$carrer[$i]->initial}}</td>
                                        <td>{{$carrer[$i]->name}}</td>
                                        <td>{{$carrer[$i]->page}}</td>
                                        <td>{{array_get($managerss,$i)}}</td>
                                        <td>
                                            <a href="{{ url('/admin/carreras/' . $carrer[$i]->id . '/edit') }}"
                                               title="@lang('form.edit')">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i><span
                                                            class="glyphicon glyphicon-pencil"
                                                            aria-hidden="true"></span></button>
                                            </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/carreras', $carrer[$i]->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => ' '.trans('form.delete').' ',
                                                    'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                                            )) !!}
                                            {!! Form::close() !!}
                                            @if($carrer[$i]->plan != "")
                                                <a href="{{ url('/download/'.$carrer[$i]->plan) }}" title=@lang('form.download')>
                                                    <button class="btn btn-warning btn-xs">
                                                        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>

                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $carrer->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
