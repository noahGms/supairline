@extends('layouts.app')

@section('content')
<h1>Modifier la fonction n°{{ $employeesFunction->id }}</h1>
<form action="/functions/{{ $employeesFunction->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $employeesFunction->name }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
