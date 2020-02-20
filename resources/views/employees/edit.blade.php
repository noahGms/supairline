@extends('layouts.app')

@section('content')
<h1 class="mb-3">Modifier un employé</h1>

<form action="/employees/{{ $employee->id }}" method="post">
	@method('PATCH')
	@include('employees.form')

	<button type="submit" class="btn btn-block btn-primary">Modifier</button>
</form>
@endsection
