@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">@lang('form.location')s</div>
                    <div class="panel-body">

                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">@lang('form.add')</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="addSectionLabel">
                            <div class="modal-dialog" role="document">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('form.add')</h4>
                                    </div>
                                    <div class="modal-body bg-modal">
                                        {!! Form::open(['url' => '/admin/sedes', 'class' => 'form-horizontal', 'files' => true]) !!}

                                        @include ('secondLocation.pwcnm_second_location.form')

                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer bg-modal">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('form.close')</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/sedes', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder=@lang('form.search')>
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
                            <table class="table table-borderless table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> @lang('form.id') </th>
                                        <th> @lang('form.name') </th>
                                        <th> @lang('form.act') </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pwcnm_second_location as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/sedes/' . $item->id . '/edit') }}" title=@lang('form.edit')>
                                                <button class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/sedes', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs ',
                                                        'title' => ''. trans('form.delete'),
                                                        'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pwcnm_second_location->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
