@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="row">

            <div class="col-md-6 col-md-offset-3 center">
                <H1 style="font-family: 'Raleway',
                sans-serif;font-weight: 100;
                color: #636b6f;
                padding: 0 25px;
                font-size: 50px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;">
                    @lang('form.allErrors')
                </H1>
            </div>
        </div>
        <div class="row">
            <div class="img-responsive col-md-6 col-md-offset-3 center">
                <img src="/img/allErrors.png" style="max-width: 100px; max-height: 100px;">
            </div>

        </div>
    </div>
@endsection
