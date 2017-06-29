@extends('layouts.app')

@section('content')
    <div class="container" id="content">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center">Bienvenido(a) a la Página del Departamento de Ciencias Naturales</h1>
    		</div>
    	</div>
        <div class="row">
            <div class="col-md-8">
            	<h2>Próximos Eventos</h2>
            	@foreach ($listEvents as $event)
	            <div class="panel panel-primary">
	                <div class="panel-heading"> {{$event->NOMBRE}} </div>
	                <div class="panel-content">
	                    <p><strong>Descripción:</strong> {{$event->DESCRIPCION}}</p>
	                    <?php 
	                    	$fecha_inicio = explode("-", $event->FECHA_INICIO);
	                    	$fecha_final = explode("-", $event->FECHA_FINAL);
	                    ?>
	                    <p><strong>Fecha: </strong> {{ $fecha_inicio[2] . '-' . $fecha_inicio[1] . '-' . $fecha_inicio[0] . ' al ' . $fecha_final[2] . '-' . $fecha_final[1] . '-' . $fecha_final[0] }}
	                </div>
	            </div>
	            @endforeach
            </div>
			<div class="col-md-4">
				<h3 class="text-center">Aquí va algo</h3>
			</div>
        </div>
    </div>
@endsection