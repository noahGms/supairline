@extends('layouts.app')

@section('content')
<h1 class="mb-3">Créer un employé</h1>

<form action="/employees" method="post">
	@include('employees.form')

	<button type="submit" class="btn btn-block btn-primary">Créer</button>
</form>

@endsection