@extends('layouts.app')

@section('content')
<form action="/licenses" method="POST">
    @csrf
    <div class="form-group">
        <label for="numero">Numéro</label>
        <input name="numero" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="validityDate">Date de validitée</label>
        <input name="validityDate" type="date" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
</form>
@endsection
