@extends('layouts.app')

@section('content')

<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">@lang('careers.careersTitle')</h1>
            <hr>
            @if($listCareer != null)
                <?php $contador = 1; ?>
                @foreach ($listCareer as $career)
                    @if($contador == count($listCareer) && $contador%2 != 0)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">{{$career->name}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p><strong>@lang('careers.inCharge'):</strong> {{$career->encargado . ' ' . $career->lastname}}</p>
                                        <p><strong>@lang('form.email'):</strong> {{$career->email}}</p>
                                        <p><strong>@lang('form.phone'):</strong> {{$career->phone}}</p>
                                        @if($career->plan != "")
                                            <p><strong>@lang('form.plan'):</strong> <a href="{{'/download/' . $career->plan}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    @else
                        @if ($contador%2 != 0)
                        <div class="row">
                        @endif
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">{{$career->name}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p><strong>@lang('careers.inCharge'):</strong> {{$career->encargado . ' ' . $career->lastname}}</p>
                                        <p><strong>@lang('form.email'):</strong> {{$career->email}}</p>
                                        <p><strong>@lang('form.phone'):</strong> {{$career->phone}}</p>
                                        @if($career->plan != "")
                                            <p><strong>@lang('form.plan'):</strong> <a href="{{'/download/' . $career->plan}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @if ($contador%2 == 0)
                        </div>
                        @endif

                        <?php $contador++; ?>
                    @endif
                @endforeach
            @else
                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>@lang('careers.noCareers')</strong>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection