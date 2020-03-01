@extends('layouts.app')

@section('content')
<form action="/types" method="POST">
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

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de tous les types</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <th scope="row">{{ $type->id ?? '' }}</th>
            <td>{{ $type->name ?? '' }}</td>
            <th><a href="/types/{{ $type->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/types/{{ $type->id }}" method="post">
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
