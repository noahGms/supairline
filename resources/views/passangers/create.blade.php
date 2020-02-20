@extends('layouts.app')

@section('content')
<h1 class="mb-3">Créer un passager</h1>

<form action="/passangers" method="post">
	@include('passangers.form')

	<button type="submit" class="btn btn-block btn-primary">Créer</button>
</form>

@endsection
