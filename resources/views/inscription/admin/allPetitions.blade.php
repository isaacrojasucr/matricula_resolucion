@extends('layouts.app')

@section('content')

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
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                    <tr>
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

                                <tr>
                                    <td>B36314</td>
                                    <td>Informática Empresarial</td>
                                    <td>Algebra lineal</td>
                                    <td>001</td>
                                    <td>Pacifico</td>
                                    <td>8.2</td>
                                    <td>897556241</td>
                                    <td>mail@mail.com</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" title=@lang('form.accept')> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> </a>
                                        <a class="btn btn-sm btn-danger" title=@lang('form.deny')> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a>
                                        <a class="btn btn-sm btn-warning" title=@lang('form.edit')> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>

                                    </td>
                                </tr>

                                <tbody>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="rejected">
                        <br/>
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
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

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="pending">
                        <br/>
                        <div class="form-horizontal">
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
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

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection  