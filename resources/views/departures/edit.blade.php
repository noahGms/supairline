@extends('layouts.app')

@section('content')
<h1 class="mb-3">Modifier un départ</h1>

<form action="/departures/{{ $departure->id }}" method="post">
    @method('PATCH')
    @include('departures.form')

	<button type="submit" class="btn btn-block btn-primary">Modifier</button>
</form>

@endsection
