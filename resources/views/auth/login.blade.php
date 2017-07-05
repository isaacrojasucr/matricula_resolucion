@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary center">
                <div class="panel-heading">
                    @lang('resolucion.login')
                </div>
                <div class="panel-body">

                    <div class="img-user" style="text-align: center;margin-top: 1%;
	                                                         margin-bottom: 1%;
	                                                         height: 30%;
	                                                         width:30%;
	                                                         margin: 0 auto;">
                        <img src="/img/loginIcono.png" class="img-responsive img-circle">
                    </div>
                    <hr style="width:100%;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6 col-md-offset-3">
                                <input id="email" type="email" class="form-control center" name="email" value="{{ old('email') }}" placeholder="@lang('login.email')" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-6 col-lg-offset-3">
                                <input id="password" type="password" class="form-control center " name="password" placeholder="@lang('login.password')" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group center">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary  col-md-12">
                                    @lang('resolucion.login')
                                </button>
                            </div>

                            <div class="col-md-8 col-md-offset-3 ">
                                    <label style="float:left">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('login.remember')
                                    </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
