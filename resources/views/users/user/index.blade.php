@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.users')</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/usuarios/create') }}" class="btn btn-success btn-sm" title=@lang('form.add')>
                            <i class="fa fa-plus" aria-hidden="true"></i> @lang('form.add')
                        </a>

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
                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < count($user); $i++)

                                    <tr>
                                        <td>{{ $user[$i]->name }}</td>
                                        <td>{{ $user[$i]->lastname }}</td>
                                        <td>{{ $user[$i]->email }}</td>
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
