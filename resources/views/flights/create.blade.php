@extends('layouts.app')

@section('content')
<h1 class="mb-3">Créer un vol</h1>

<form action="/flights" method="post">
	@include('flights.form')

	<button type="submit" class="btn btn-block btn-primary">Créer</button>
</form>

@endsection
