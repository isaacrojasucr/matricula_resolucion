@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Pwcnm_registration_process</div>
                    <div class="panel-body">
                        <a href="{{ url('/registrationProcess/pwcnm_registration_process/create') }}" class="btn btn-success btn-sm" title="Add New pwcnm_registration_process">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/registrationProcess/pwcnm_registration_process', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
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
                                        <th>ID</th><th>Period</th><th>Anno</th><th>InitialDate</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pwcnm_registration_process as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->period }}</td><td>{{ $item->anno }}</td><td>{{ $item->InitialDate }}</td>
                                        <td>
                                            <a href="{{ url('/registrationProcess/pwcnm_registration_process/' . $item->id) }}" title="View pwcnm_registration_process"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/registrationProcess/pwcnm_registration_process/' . $item->id . '/edit') }}" title="Edit pwcnm_registration_process"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/registrationProcess/pwcnm_registration_process', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete pwcnm_registration_process',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
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
