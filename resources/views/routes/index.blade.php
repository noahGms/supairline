@extends('layouts.app')

@section('content')
<form action="/routes" method="POST">
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') }}">
        @error('numero')
        <div class="invalid-feedback">
            {{ $errors->first('numero') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="departureCity">Ville de départ</label>
        <select name="departureCity" id="departureCity" class="custom-select @error('departureCity') is-invalid @enderror"">
            <option>-- Selectionner une ville de départ --</option>
            @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }} - {{ $city->zipCode }}</option>
            @endforeach
        </select>
        @error('departureCity')
        <div class="invalid-feedback">
            {{ $errors->first('departureCity') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="arrivalCity">Ville de d'arrivée</label>
        <select name="arrivalCity" id="arrivalCity" class="custom-select @error('arrivalCity') is-invalid @enderror"">
            <option>-- Selectionner une ville d'arrivée --</option>
            @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }} - {{ $city->zipCode }}</option>
            @endforeach
        </select>
        @error('arrivalCity')
        <div class="invalid-feedback">
            {{ $errors->first('arrivalCity') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de tous les itinéraires</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numéro</th>
            <th scope="col">Ville de départ</th>
            <th scope="col">Ville d'arrivée</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($routes as $route)
        <tr>
            <th scope="row">{{ $route->id }}</th>
            <td>{{ $route->numero }}</td>
            <td>{{ $route->dCity->name }}</td>
            <td>{{ $route->aCity->name }}</td>
            <th><a href="/routes/{{ $route->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/routes/{{ $route->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="text-danger fas fa-trash"></i></button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
