@extends('layouts.app')

@section('content')
<h1 class="mb-3">Modifier un vols</h1>

<form action="/flights/{{ $flight->id }}" method="post">
    @method('PATCH')
    @include('flights.form')

	<button type="submit" class="btn btn-block btn-primary">Modifier</button>
</form>

@endsection
