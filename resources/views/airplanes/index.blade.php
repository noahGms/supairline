@extends('layouts.app')

@section('content')
<form action="/airplanes" method="POST">
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
        <label for="capacity">Capacité</label>
        <input name="capacity" type="number" class="form-control @error('capacity') is-invalid @enderror" value="{{ old('capacity') }}">
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
        <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
    @error('type_id')
    <div class="invalid-feedback">
        {{ $errors->first('type_id') }}
    </div>
    @enderror
</div>

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de tous les avions</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numéro</th>
            <th scope="col">Capacité</th>
            <th scope="col">Type</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($airplanes as $airplane)
        <tr>
            <th scope="row">{{ $airplane->id ?? '' }}</th>
            <td>{{ $airplane->numero ?? '' }}</td>
            <td>{{ $airplane->capacity ?? '' }}</td>
            <td>{{ $airplane->type->name ?? '' }}</td>
            <th><a href="/airplanes/{{ $airplane->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/airplanes/{{ $airplane->id }}" method="post">
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
