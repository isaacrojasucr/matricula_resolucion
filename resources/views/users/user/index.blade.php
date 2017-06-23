@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.users')</div>
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
                                        @include('users.user.create')
                                    </div>
                                    <div class="modal-footer bg-modal">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('form.close')</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/usuarios', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>@lang('form.name')</th>
                                    <th>@lang('form.lastname')</th>
                                    <th>@lang('form.email')</th>
                                    <th>@lang('form.role')</th>
                                    <th>@lang('form.phone')</th>
                                    <th>@lang('form.act')</th>


                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < count($user); $i++)

                                    <tr>
                                        <td>{{ $user[$i]->name }}</td>
                                        <td>{{ $user[$i]->lastname }}</td>
                                        <td>{{ $user[$i]->email }}</td>
                                        <td>
                                            @if($user[$i]->role == 1)
                                                @lang('form.admin')
                                            @else
                                                @lang('form.manager')
                                            @endif
                                        </td>
                                        <td>{{ $user[$i]->phone }}</td>
                                        <td>
                                            <a href="{{ url('/admin/usuarios/' . $user[$i]->id) }}" title= @lang('form.view') ><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>
                                            <a href="{{ url('/admin/usuarios/' . $user[$i]->id . '/edit') }}" title=@lang('form.edit')><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/usuarios', $user[$i]->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => ''.trans('form.delete'),
                                                    'onclick'=>'return confirm("'.trans('form.comfirm') .'")'
                                            )) !!}
                                            {!! Form::close() !!}
                                         </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $user->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
