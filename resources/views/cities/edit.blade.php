@extends('layouts.app')

@section('content')
<h1>Modifier la ville n°{{ $city->id }}</h1>
<form action="/cities/{{ $city->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $city->name }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="zipCode">Code postal</label>
        <input name="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" value="{{ old('zipCode') ?? $city->zipCode }}">
        @error('zipCode')
        <div class="invalid-feedback">
            {{ $errors->first('zipCode') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
