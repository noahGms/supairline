@extends('layouts.app')

@section('content')
<h1 class="text-center">Listes de tous les passagers <a href="/passangers/create" class="btn btn-sm btn-primary">Créer</a></h1>
<table class="table text-center mt-3">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Numéro</th>
			<th scope="col">Nom & Prénom</th>
			<th scope="col">Adresse</th>
			<th scope="col">Profession</th>
			<th scope="col">Banque</th>
			<th scope="col">Avion</th>
			<th scope="col" colspan="3">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($passangers as $passanger)
		<tr>
			<th>{{ $passanger->id ?? '' }}</th>
			<th>{{ $passanger->numero ?? '' }}</th>
			<th>{{ $passanger->name ?? '' }} {{ $passanger->firstName ?? '' }}</th>
			<th>{{ $passanger->address ?? '' }} {{ $passanger->city->name ?? '' }}-{{ $passanger->city->zipCode ?? '' }}</th>
			<th>{{ $passanger->job ?? '' }}</th>
			<th>{{ $passanger->bank ?? '' }}</th>
			<th><a href="/passangers/{{ $passanger->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
			<th>
				<form action="/passangers/{{ $passanger->id }}" method="post">
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
