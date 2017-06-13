@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">pwcnm_registration_process {{ $pwcnm_registration_process->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/registrationProcess/pwcnm_registration_process') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/registrationProcess/pwcnm_registration_process/' . $pwcnm_registration_process->id . '/edit') }}" title="Edit pwcnm_registration_process"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['registrationProcess/pwcnm_registration_process', $pwcnm_registration_process->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pwcnm_registration_process',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pwcnm_registration_process->id }}</td>
                                    </tr>
                                    <tr><th> Period </th><td> {{ $pwcnm_registration_process->period }} </td></tr><tr><th> Anno </th><td> {{ $pwcnm_registration_process->anno }} </td></tr><tr><th> InitialDate </th><td> {{ $pwcnm_registration_process->InitialDate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
