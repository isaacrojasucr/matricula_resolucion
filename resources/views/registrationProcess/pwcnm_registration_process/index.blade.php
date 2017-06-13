@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.processes')</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/procesos/create') }}" class="btn btn-success btn-sm" title=@lang('form.add')>
                            <i class="fa fa-plus" aria-hidden="true"></i> @lang('form.add')
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/procesos', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>@lang('form.year')</th>
                                        <th>@lang('form.period')</th>
                                        <th>@lang('form.iniDate')</th>
                                        <th>@lang('form.remDays')</th>
                                        <th>@lang('form.act')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pwcnm_registration_process as $item)
                                    <tr>
                                        <td>{{ $item->anno }}</td>
                                        <td>{{ $item->period }}</td>
                                        <td>{{ $item->InitialDate }}</td>
                                        <td>
                                        @if ($item->FinalDate <= 0)
                                            @lang('form.ended');
                                        @else
                                            {{$item->FinalDate}}
                                        @endif

                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/procesos/' . $item->id) }}" title=@lang('form.view')>
                                                <button class="btn btn-info btn-xs">
                                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                        @if ($item->FinalDate > 0)
                                            <a href="{{ url('/admin/procesos/' . $item->id . '/edit') }}" title=@lang('form.edit')>
                                                <button class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/procesos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => ''.trans('form.delete'),
                                                        'onclick'=>'return confirm("'.@trans('form.comfirm').'")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pwcnm_registration_process->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
