@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">@lang('welcome.aboutUsTitle')</h1>
            <p>@lang('welcome.abouUs1')</p>
            <p>@lang('welcome.abouUs2')</p>
            <p>@lang('welcome.abouUs3')</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            @foreach ($listUsers as $user)
                @if($user->role == 4)
                    <h2 class="text-center">@lang('welcome.headDepartmentTitle')</h2>
                    <h3>@lang('form.name')</h3>
                    <p>{{$user->name . ' ' . $user->lastname}}</p>
                    <h3>@lang('form.email')</h3>
                    <p>{{$user->email}}</p>
                @endif
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($listUsers as $user)
                @if($user->role == 1)
                    <h2 class="text-center">@lang('welcome.secretaryDepartmentTitle')</h2>
                    <h3>@lang('form.name')</h3>
                    <p>{{$user->name . ' ' . $user->lastname}}</p>
                    <h3>@lang('form.email')</h3>
                    <p>secretariacienciasnaturales.so@ucr.ac.cr</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection