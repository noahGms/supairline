@extends('layouts.app')

@section('content')
<h1>Modifier la licences n°{{ $license->id }}</h1>
<form action="/licenses/{{ $license->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control" value="{{ old('numero') ?? $license->numero }}">
    </div>
    <div class="form-group">
        <label for="validityDate">Date de validitée</label>
        <input name="validityDate" type="date" class="form-control" value="{{ old('validityDate') ?? $license->validityDate }}">
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
