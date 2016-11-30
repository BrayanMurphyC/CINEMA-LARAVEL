@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table" id="myTable">
			<thead>
				<th>Nombre</th>
				<th>Genero</th>
				<th>Direccion</th>
				<th>Caratula</th>
				<th>Operaciones</th>
			</thead>

			{{--recorremos la variable movies2 en la variabble que creamos moviex--}}
			@foreach($movies2 as $moviex)
				<tbody>
					<td>{{$moviex->name}}</td> 	{{--mostramos del movie2 que trae del modelo MOVIE su nombre--}}
					<td>{{$moviex->genre}}</td>	{{--mostramos del movie2 que trae del modelo MOVIE su GENRE GRACIAS A LA CONSULTA--}}
					<td>{{$moviex->direction}}</td>	{{--mostramos del movie2 que trae del modelo MOVIE su direccion--}}
					<td> {{--aca contruimos la imgaen esta en la carpeta movies y especificamos moviex le pasamos el path que esta en la base de datos--}}
						<img src="movies/{{$moviex->path}}" alt="" style="width:100px;"/>{{--mostramos del movie2 que trae del modelo MOVIE su IMAGEN--}}
					</td>
					<td>Editar</td>
				</tbody>
			@endforeach
		</table>
	@endsection
