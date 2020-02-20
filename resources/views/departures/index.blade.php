@extends('layouts.app')

@section('content')
<h1 class="text-center">Listes de tous les départs <a href="/departures/create" class="btn btn-sm btn-primary">Créer</a></h1>
<table class="table text-center mt-3">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Numéro</th>
			<th scope="col">Dete de départ</th>
			<th scope="col">Place libre</th>
			<th scope="col">Place occupée</th>
			<th scope="col">Pilote 1</th>
			<th scope="col">Pilote 2</th>
			<th scope="col">Membre 1</th>
			<th scope="col">Membre 2</th>
			<th scope="col">Membre 3</th>
			<th scope="col">Membre 4</th>
			<th scope="col">Vol</th>
			<th scope="col" colspan="3">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($departures as $departure)
		<tr>
			<th>{{ $departure->id }}</th>
			<th>{{ $departure->numero }}</th>
			<th>{{ $departure->departureDate }}</th>
			<th>{{ $departure->placeEmpty }}</th>
			<th>{{ $departure->placeUsed }}</th>
			<th>{{ $departure->pilote1->name ?? '' }} {{ $departure->pilote1->firstName ?? '' }}</th>
			<th>{{ $departure->pilote2->name ?? '' }} {{ $departure->pilote2->firstName ?? '' }}</th>
			<th>{{ $departure->member1->name ?? '' }} {{ $departure->member1->firstName ?? '' }}</th>
			<th>{{ $departure->member2->name ?? '' }} {{ $departure->member2->firstName ?? '' }}</th>
			<th>{{ $departure->member3->name ?? '' }} {{ $departure->member3->firstName ?? '' }}</th>
			<th>{{ $departure->member4->name ?? '' }} {{ $departure->member4->firstName ?? '' }}</th>
			<th>{{ $departure->flight->numero ?? '' }}</th>
			<th><a href="/departures/{{ $departure->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
			<th>
				<form action="/departures/{{ $departure->id }}" method="post">
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
