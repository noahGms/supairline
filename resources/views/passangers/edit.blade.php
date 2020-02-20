@extends('layouts.app')

@section('content')
<h1 class="mb-3">Modifier un passager</h1>

<form action="/passangers/{{ $passanger->id }}" method="post">
	@method('PATCH')
	@include('passangers.form')

	<button type="submit" class="btn btn-block btn-primary">Modifier</button>
</form>

@endsection
