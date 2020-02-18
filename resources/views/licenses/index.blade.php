@extends('layouts.app')

@section('content')
<h1 class="text-center">Licenses</h1>
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
            <th scope="row">{{ $license->id }}</th>
            <td>{{ $license->numero }}</td>
            <td>{{ Carbon\Carbon::parse($license->validityDate)->format('d m Y') }}</td>
            <th><a href=""><i class="text-dark fas fa-edit"></i></a></th>
            <th><a href=""><i class="text-danger fas fa-trash"></i></a></th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
