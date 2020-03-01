@extends('layouts.app')

@section('content')
<form action="/licenses" method="POST">
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
        <label for="validityDate">Date de validitée</label>
        <input name="validityDate" type="date" class="form-control @error('validityDate') is-invalid @enderror" value="{{ old('validityDate') }}">
        @error('validityDate')
        <div class="invalid-feedback">
            {{ $errors->first('validityDate') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de toutes les licenses</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numéro</th>
            <th scope="col">Date de validitée</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($licenses as $license)
        <tr>
            <th scope="row">{{ $license->id ?? '' }}</th>
            <td>{{ $license->numero ?? '' }}</td>
            <td>{{ Carbon\Carbon::parse($license->validityDate)->format('d-m-Y') }}</td>
            <th><a href="/licenses/{{ $license->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/licenses/{{ $license->id }}" method="post">
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
