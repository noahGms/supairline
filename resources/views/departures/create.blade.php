@extends('layouts.app')

@section('content')
<h1 class="mb-3">Créer un départ</h1>

<form action="/departures" method="post">
	@include('departures.form')

	<button type="submit" class="btn btn-block btn-primary">Créer</button>
</form>

@endsection
