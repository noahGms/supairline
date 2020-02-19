@extends('layouts.app')

@section('content')
<h1 class="text-center">Listes de tous les employés <a href="/employees/create" class="btn btn-sm btn-primary">Créer</a></h1>
<table class="table text-center mt-3">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Numéro de sécurité sociale</th>
			<th scope="col">Nom & Prénom</th>
			<th scope="col">Adresse</th>
			<th scope="col">Salaire</th>
			<th scope="col">Nombre d'heure</th>
			<th scope="col">Licence</th>
			<th scope="col">Fonctions</th>
			<th scope="col" colspan="3">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($employees as $employee)
		<tr>
			<th>{{ $employee->id }}</th>
			<th>{{ $employee->socialNumero }}</th>
			<th>{{ $employee->name }} {{ $employee->firstName }}</th>
			<th>{{ $employee->address }} - {{ $employee->city->zipCode }} {{ $employee->city->name }}</th>
			<th>{{ $employee->salary }}</th>
			<th>{{ $employee->hours }}</th>
			<th>{{ $employee->license->numero ?? '' }}</th>
			<th>{{ $employee->employeesFunction->name }}</th>
			<th><a href="/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
			<th>
				<form action="/employees/{{ $employee->id }}" method="post">
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
