@extends('layouts.app')

@section('content')
<h1>Modifier l'avion n°{{ $airplane->id }}</h1>
<form action="/airplanes/{{ $airplane->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $airplane->numero }}">
        @error('numero')
        <div class="invalid-feedback">
            {{ $errors->first('numero') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="capacity">Capacitée</label>
        <input name="capacity" type="number" class="form-control @error('capacity') is-invalid @enderror" value="{{ old('capacity') ?? $airplane->capacity }}">
        @error('capacity')
        <div class="invalid-feedback">
            {{ $errors->first('capacity') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type_id">Type</label>
        <select name="type_id" id="type_id" class="custom-select @error('type_id') is-invalid @enderror"">
            <option value="0">-- Selectionner un type --</option>
            @foreach($types as $type)
            <option value=" {{ $type->id }}" {{ $airplane->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
            @endforeach
        </select>
        @error('type_id')
        <div class="invalid-feedback">
            {{ $errors->first('type_id') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
