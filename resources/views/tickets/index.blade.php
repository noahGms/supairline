@extends('layouts.app')

@section('content')
<form action="/tickets" method="POST">
    @csrf
    <div class="form-group">
        <label for="date">Date</label>
        <input name="date" type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
        @error('date')
        <div class="invalid-feedback">
            {{ $errors->first('date') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input name="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
        @error('price')
        <div class="invalid-feedback">
            {{ $errors->first('price') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="departure_id">Depart</label>
        <select name="departure_id" id="departure_id" class="custom-select @error('departure_id') is-invalid @enderror">
            <option value="0">-- Selectionner un départ --</option>
            @foreach($departures as $departure)
            <option value="{{ $departure->id }}">{{ $departure->numero }}</option>
            @endforeach
        </select>
        @error('departure_id')
        <div class="invalid-feedback">
            {{ $errors->first('departure_id') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="passanger_id">Passager</label>
        <select name="passanger_id" id="passanger_id" class="custom-select @error('passanger_id') is-invalid @enderror">
            <option value="0">-- Selectionner un départ --</option>
            @foreach($passangers as $passanger)
            <option value="{{ $passanger->id }}">{{ $passanger->numero }}</option>
            @endforeach
        </select>
        @error('passanger_id')
        <div class="invalid-feedback">
            {{ $errors->first('passanger_id') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-block mb-3 btn-primary">Créer</button>
</form>
<h1 class="text-center">Listes de toutes les tickets</h1>
<table class="table text-center mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Prix</th>
            <th scope="col">Départ</th>
            <th scope="col">Passager</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
        <tr>
            <th scope="row">{{ $ticket->id }}</th>
            <td>{{ $ticket->date }}</td>
            <td>{{ $ticket->price }}</td>
            <td>{{ $ticket->departure->numero ?? '' }}</td>
            <td>{{ $ticket->passanger->numero ?? '' }}</td>
            <th><a href="/tickets/{{ $ticket->id }}/edit" class="btn btn-sm btn-outline-secondary"><i class="text-dark fas fa-edit"></i></a></th>
            <th>
                <form action="/tickets/{{ $ticket->id }}" method="post">
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
