@extends('layouts.app')

@section('content')
<h1>Modifier la fonction n°{{ $route->id }}</h1>
<form action="/routes/{{ $route->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $route->numero }}">
        @error('numero')
        <div class="invalid-feedback">
            {{ $errors->first('numero') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="departureCity">Ville de départ</label>
        <select name="departureCity" id="departureCity" class="custom-select @error('departureCity') is-invalid @enderror"">
            <option value="0">-- Selectionner une ville de départ --</option>
            @foreach($cities as $city)
            <option value="{{ $city->id }}" {{ $route->departureCity == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
            @endforeach
        </select>
        @error('departureCity')
        <div class="invalid-feedback">
            {{ $errors->first('departureCity') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="arrivalCity">Ville d'arrivée</label>
        <select name="arrivalCity" id="arrivalCity" class="custom-select @error('arrivalCity') is-invalid @enderror"">
            <option value="0">-- Selectionner une ville d'arrivée --</option>
            @foreach($cities as $city)
            <option value="{{ $city->id }}" {{ $route->arrivalCity == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
            @endforeach
        </select>
        @error('arrivalCity')
        <div class="invalid-feedback">
            {{ $errors->first('arrivalCity') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
