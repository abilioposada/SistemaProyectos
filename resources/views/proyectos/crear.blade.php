<x-plantillas.plantilla>
	<x-slot:titulo>
		Crear
	</x-slot>
	
	<a href="{{ url( 'proyectos' ) }}" class="btn btn-secondary mb-3">Regresar</a>

	<article class="row">
		<form action="{{ url( 'proyectos' ) }}" method="post" class="col-6">
			@csrf

			<div class="form-floating mb-3">
				<input class="form-control" name="nombreProyecto" id="nombreProyecto" placeholder="Nombre" />
				<label for="nombreProyecto">Nombre</label>
			</div>

			<select class="form-select mb-3" name="fuenteFondos">
				<option selected value="empleo">Empleo</option>
				<option value="prestamo">Préstamo</option>
				<option value="ahorro">Ahorro</option>
				<option value="bienes raices">Bienes Raíces</option>
				<option value="alquiler">Alquiler</option>
				<option value="herencia">Herencia</option>
			</select>

			<div class="input-group mb-3">
				<span class="input-group-text" id="montoPlanificado-addon">$</span>
				<input class="form-control" name="montoPlanificado" placeholder="Monto Planificado" type="number" step="0.01" min="0.01" max="1000000" />
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="montoPatrocinado-addon">$</span>
				<input class="form-control" name="montoPatrocinado" placeholder="Monto Patrocinado" type="number" step="0.01" min="0.01" max="1000000" />
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="montoFondosPropios-addon">$</span>
				<input class="form-control" name="montoFondosPropios" placeholder="Monto Fondos Propios" type="number" step="0.01" min="0.01" max="1000000" />
			</div>

			<input type="submit" class="btn btn-primary mb-3" value="Guardar" />
		</form>
	</article>

	<!-- Errores -->
	<article>
		@if ( $errors->any() )
			<li class="alert alert-danger">
				<ul>
					@foreach ( $errors->all() as $error )
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</li>
		@endif
	</article>
	<!-- /Errores -->
</x-plantillas.plantilla>
