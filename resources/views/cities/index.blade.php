@extends('layouts.app')

@section('content')
<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="zipCode">Code postal</label>
        <input name="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" value="{{ old('zipCode') }}">
        @error('zipCode')
        <div class="invalid-feedback">
            {{ $errors->first('zipCode') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de toutes les villes</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Code postal</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
        <tr>
            <th scope="row">{{ $city->id ?? '' }}</th>
            <td>{{ $city->name ?? '' }}</td>
            <td>{{ $city->zipCode ?? '' }}</td>
            <th><a href="/cities/{{ $city->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/cities/{{ $city->id }}" method="post">
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
