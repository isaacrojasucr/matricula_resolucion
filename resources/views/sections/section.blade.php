@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">@lang('sections.sectionsTitle')</h1>
            <hr>
            <?php $contador = 1; ?>
            @foreach ($listSection as $section)
                @if($contador == count($listSection) && $contador%2 != 0)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">{{$section->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p><strong>@lang('careers.inCharge'):</strong> {{$section->name}}</p>
                                    <p><strong>@lang('form.email'): {{$section->email}}</p>
                                    <p><strong>@lang('form.phone'): {{$section->phone}}</p>
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
                                    <h3 class="panel-title text-center">{{$section->NOMBRE}}</h3>
                                </div>
                                <div class="panel-body">
                                    <p><strong>@lang('careers.inCharge'):</strong> {{$section->name}}</p>
                                    <p><strong>@lang('form.email'):</strong> {{$section->email}}</p>
                                    <p><strong>@lang('form.phone'):</strong> {{$section->phone}}</p>
                                </div>
                            </div>
                        </div>
                    @if ($contador%2 == 0)
                    </div>
                    @endif

                    <?php $contador++; ?>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection