@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<br><br>
				<table id="datatables" class="table table-striped table-bordered" cellspacing="5">
					<thead>
					<tr>
						<th>Rut</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Cargo</th>
						<th>Estado</th>
						<th>Perfil</th>
						<th>Opciones</th>
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>Rut</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Cargo</th>
						<th>Estado</th>
						<th>Perfil</th>
						<th>Opciones</th>
					</tr>
					</tfoot>
					<tbody>
					@forelse($usuarios as $item)
						<tr>
							<td>{{ $item->rut }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->email}}</td>
							<td>{{ $item->cargo()->first()->titulo}}</td>
							<td>{{ $item->estado}}</td>
							<td>{{ $item->perfil}}</td>

							<td>
								<a href="{{route('usuarios.evaluar', $item->id)}}" title="Evaluar" class="btn btn-info">
									<i class="fa fa-fw fa-edit"></i> <span class="text-muted"></span> Evaluar
								</a>
							</td>
						</tr>
					@empty
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					@endforelse

					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
