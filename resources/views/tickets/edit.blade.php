@extends('layouts.app')

@section('content')
<h1>Modifier le ticket n°{{ $ticket->id }}</h1>
<form action="/tickets/{{ $ticket->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="date">Date</label>
        <input name="date" type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') ?? $ticket->date }}">
        @error('date')
        <div class="invalid-feedback">
            {{ $errors->first('date') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input name="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ?? $ticket->price }}">
        @error('price')
        <div class="invalid-feedback">
            {{ $errors->first('price') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="departure_id">Depart</label>
        <select name="departure_id" id="departure_id" class="custom-select @error('departure_id') is-invalid @enderror">
            <option>-- Selectionner un départ --</option>
            @foreach($departures as $departure)
            <option value="{{ $departure->id }}" {{ $ticket->departure_id == $departure->id ? 'selected' : '' }}>{{ $departure->numero }}</option>
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
            <option>-- Selectionner un départ --</option>
            @foreach($passangers as $passanger)
            <option value="{{ $passanger->id }}" {{ $ticket->passanger_id == $passanger->id ? 'selected' : '' }}>{{ $passanger->numero }}</option>
            @endforeach
        </select>
        @error('passanger_id')
        <div class="invalid-feedback">
            {{ $errors->first('passanger_id') }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
