@extends('layouts.app')

@section('content')
<h1>Modifier la licence n°{{ $license->id }}</h1>
<form action="/licenses/{{ $license->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $license->numero }}">
        @error('numero')
        <div class="invalid-feedback">
            {{ $errors->first('numero') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="validityDate">Date de validitée</label>
        <input name="validityDate" type="date" class="form-control @error('validityDate') is-invalid @enderror" value="{{ old('validityDate') ?? $license->validityDate }}">
        @error('validityDate')
        <div class="invalid-feedback">
            {{ $errors->first('validityDate') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
