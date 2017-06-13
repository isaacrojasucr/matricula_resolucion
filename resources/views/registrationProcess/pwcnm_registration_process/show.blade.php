@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.process')</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/procesos') }}" title=@lang('form.back')>
                            <button class="btn btn-info btn">
                                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> @lang('form.back')
                            </button>

                        </a>

                        <a href="{{ url('/admin/procesos/' . $pwcnm_registration_process->id . '/edit') }}" title="">
                            <button class="btn btn-primary btn">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </button>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/procesos', $pwcnm_registration_process->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn',
                                    'title' => ''.trans('form.delete'),
                                    'onclick'=>'return confirm("'.trans('form.comfirm').'")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> @lang('form.year') </th><td> {{ $pwcnm_registration_process->anno }} </td></tr>
                                    <tr><th> @lang('form.period') </th><td> {{ $pwcnm_registration_process->period }} </td></tr>
                                    <tr><th> @lang('form.iniDate') </th><td> {{ $pwcnm_registration_process->InitialDate }} </td></tr>
                                    <tr><th> @lang('form.finalDate') </th><td> {{ $pwcnm_registration_process->FinalDate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
