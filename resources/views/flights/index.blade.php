@extends('layouts.app')

@section('content')
<h1 class="text-center">Listes de tous les vols <a href="/flights/create" class="btn btn-sm btn-primary">Créer</a></h1>
<table class="table text-center mt-3">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Numéro</th>
			<th scope="col">Période de validitée 1</th>
			<th scope="col">Période de validitée 2</th>
			<th scope="col">Heure de départ</th>
			<th scope="col">Heure d'arrivée</th>
			<th scope="col">Itinéraire</th>
			<th scope="col">Avion</th>
			<th scope="col" colspan="3">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($flights as $flight)
		<tr>
			<th>{{ $flight->id ?? '' }}</th>
			<th>{{ $flight->numero ?? '' }}</th>
			<th>{{ $flight->periodeValidity1 ?? '' }}</th>
			<th>{{ $flight->periodeValidity2 ?? '' }}</th>
			<th>{{ $flight->departureTime ?? '' }}</th>
			<th>{{ $flight->arrivalTime ?? '' }}</th>
			<th>{{ $flight->route->numero ?? '' }}</th>
			<th>{{ $flight->airplane->numero ?? '' }}</th>
			<th><a href="/flights/{{ $flight->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
			<th>
				<form action="/flights/{{ $flight->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="text-danger fas fa-trash"></i></button>
                </form>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
