@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.user') {{ $user->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/usuarios') }}" title="Back">
                            <button class="btn btn-info btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button>
                        </a>
                        <a href="{{ url('/admin/usuarios/' . $user->id . '/edit') }}" class="btn btn-primary btn" title=@lang('form.edit') >
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/usuarios', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn',
                                'title' => trans('delete'),
                                'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                        ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th> @lang('form.name') </th>
                                    <td> {{ $user->name }} </td>
                                </tr>
                                <tr>
                                    <th> @lang('form.lastname') </th>
                                    <td> {{ $user->lastname }} </td>
                                </tr>
                                <tr>
                                    <th> @lang('form.email')  </th>
                                    <td> {{ $user->email }} </td>
                                </tr>
                                <tr>
                                    <th> @lang('form.role')  </th>
                                    <td>@if($user->role ==1)
                                            @lang('form.admin')
                                        @else
                                            @lang('form.manager');
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th> @lang('form.phone')  </th>
                                    <td> {{ $user->phone }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
