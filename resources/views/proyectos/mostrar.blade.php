<x-plantillas.plantilla>
	<x-slot:titulo>
		Mostrar
	</x-slot>
	
	<a href="{{ url( 'proyectos' ) }}" class="btn btn-secondary mb-3">Regresar</a>

	<article class="col-6">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover table-sm">
				<thead>
					<tr>
						<th>Propiedad</th>
						<th>Valor</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>ID</th>
						<td>{{ $proyecto->id }}</td>
					</tr>

					<tr>
						<th>Nombre</th>
						<td>{{ $proyecto->nombreProyecto }}</td>
					</tr>

					<tr>
						<th>Fuente Fondos</th>
						<td>{{ ucfirst( $proyecto->fuenteFondos ) }}</td>
					</tr>

					<tr>
						<th>Monto Planificado</th>
						<td>${{ $proyecto->montoPlanificado }}</td>
					</tr>

					<tr>
						<th>Monto Patrocinado</th>
						<td>${{ $proyecto->montoPatrocinado }}</td>
					</tr>

					<tr>
						<th>Monto Fondos Propios</th>
						<td>${{ $proyecto->montoFondosPropios }}</td>
					</tr>
				</tbody>

				<tfoot>
					<tr>
						<td>
							<a href="{{ url( 'proyectos/' . $proyecto->id . '/edit' ) }}" class="btn btn-warning" title="Editar Elemento">Editar</a>
						</td>

						<td>
							<form action="{{ url( 'proyectos', $proyecto->id ) }}" method="post">
								@csrf()
								@method( 'DELETE' )
								
								<input class="btn btn-danger" type="submit" title="Eliminar Elemento" value="Eliminar" />
							</form>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</article>
</x-plantillas.plantilla>
