<x-plantillas.plantilla>
	<x-slot:titulo>
		Listado
	</x-slot>

	@if ( session( 'mensaje' ) )
		<div class="alert alert-info alert-dismissible fade show" role="alert">
			{{ session( 'mensaje' ) }}
			<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		</div>
	@endif
	
	<a href="{{ url( 'proyectos/create' ) }}" class="btn btn-success mb-3">Crear</a>

	<article>
		<div class="table-responsive">
			<table class="table table-bordered table-sm table-striped table-hover">
				<thead class="table-dark">
					<tr>
						<th>Nombre</th>
						<th>Fuente</th>
						<th class="text-end">Monto Planificado</th>
						<th class="text-end">Monto Patrocinado</th>
						<th class="text-end">Monto Fondos Propios</th>
						<th class="text-center" colspan="3">Acciones</th>
					</tr>
				</thead>
				
				<tbody>
					@foreach ( $proyectos as $proyecto )
						<tr>
							<td>{{ $proyecto->nombreProyecto }}</td>
							<td>{{ ucfirst( $proyecto->fuenteFondos ) }}</td>
							<td align="right">${{ $proyecto->montoPlanificado }}</td>
							<td align="right">${{ $proyecto->montoPatrocinado }}</td>
							<td align="right">${{ $proyecto->montoFondosPropios }}</td>

							<td align="center">
								<a href="{{ url( 'proyectos', $proyecto->id ) }}" class="btn btn-info" title="Mostrar Detalle">Mostrar</a>
							</td>

							<td align="center">
								<a href="{{ url( 'proyectos/' . $proyecto->id . '/edit' ) }}" class="btn btn-warning" title="Editar Elemento">Editar</a>
							</td>

							<td align="center">
								<form action="{{ url( 'proyectos', $proyecto->id ) }}" method="post">
									@csrf()
									@method( 'DELETE' )
									<input class="btn btn-danger" type="submit" title="Eliminar Elemento" value="Eliminar" />
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</article>

	<!-- Pagination -->
	{{ $proyectos }}
</x-plantillas.plantilla>
