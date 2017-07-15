@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">@lang('services.servicesTitle') 
            @if ($rol == '0')
                @lang('services.teachers')
            @else
                @lang('services.students')
            @endif
            </h1>
            <hr>
            @if($listService != null)
                <?php $contador = 1; ?>
                @foreach ($listService as $service)
                    @if($contador == count($listService) && $contador%2 != 0)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">{{$service->NOMBRE}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p><strong>@lang('form.description'):</strong> {{$service->DESCRIPCION}}</p>
                                        <p><strong>@lang('form.download'):</strong> <a href="{{'/download/' . $service->ARCHIVO}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
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
                                        <h3 class="panel-title text-center">{{$service->NOMBRE}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p><strong>@lang('form.description'):</strong> {{$service->DESCRIPCION}}</p>
                                        <p><strong>@lang('form.download'):</strong> <a href="{{'/download/' . $service->ARCHIVO}}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
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
                    <strong>@lang('services.noServices')</strong>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection