@extends('layouts.app')

@section('content')
    <div class="container" id="content">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center">@lang('welcome.welcomeTitle')</h1>
    		</div>
    	</div>
    	<hr>
        <div class="row">
            <div class="col-md-8">
            	<h2 class="text-center">@lang('welcome.nextEvents')</h2>
            	@foreach ($listEvents as $event)
	            <div class="panel panel-primary">
	                <div class="panel-heading">
	                	<h3 class="panel-title">
		                	{{$event->NOMBRE . ' - '}} @lang('welcome.addressedTo') {{' '}}
		                	@if ($event->ROL == '0')
		                		@lang('welcome.teachers')
		                	@else
		                		@lang('welcome.students')
		                	@endif
	                	</h3>
	                </div>
	                <div class="panel-content">
	                    <p><strong>@lang('form.description'):</strong> {{$event->DESCRIPCION}}</p>
	                    <?php 
	                    	$fecha_inicio = explode("-", $event->FECHA_INICIO);
	                    	$fecha_final = explode("-", $event->FECHA_FINAL);
	                    ?>
	                    <p><strong>@lang('form.date'): </strong> {{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] }} @lang('events.to') {{ $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}
	                </div>
	            </div>
	            @endforeach
            </div>
			<div class="col-md-4" id="generalInfo">
				<h2 class="text-center">@lang('welcome.generalInformation')</h2>
				<div class="panel panel-primary">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<p><strong>@lang('welcome.officeHours')</strong></p>
						<p>@lang('welcome.monTofri')</p>
						<p>8:00 am. @lang('welcome.to') 12:00 md.</p>
						<p>1:30 pm. @lang('welcome.to') 5:30 pm.</p>
						<hr>
						<p><strong>@lang('welcome.location')</strong></p>
						<p>@lang('welcome.locationDesc')</p>
						<hr>
						<p><strong>@lang('welcome.telephone')</strong></p>
						<p>2511-7015</p>
						<hr>
						<p><strong>@lang('welcome.email')</strong></p>
						<p>secretariacienciasnaturales.so@ucr.ac.cr</p>
					</div>
				</div>
				<img src="{{ asset('img/logoCiencias.jpg') }}" class="img-responsive" alt="Responsive image">
			</div>
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-12">
        		<h2 class="text-center">Video demostrativo</h2>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-3"></div>
        	<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EvfwgP_Yjqc" allowfullscreen></iframe>
				</div>
        	</div>
        	<div class="col-md-6"></div>
        </div>
    </div>
@endsection