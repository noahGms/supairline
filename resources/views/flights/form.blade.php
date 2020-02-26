@csrf
<div class="form-group">
    <label for="numero">Numéro</label>
    <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $flight->numero }}">
    @error('numero')
    <div class="invalid-feedback">
        {{ $errors->first('numero') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="periodeValidity1">Période de validité 1</label>
    <input name="periodeValidity1" type="date" class="form-control @error('periodeValidity1') is-invalid @enderror" value="{{ old('periodeValidity1') ?? $flight->periodeValidity1 }}">
    @error('periodeValidity1')
    <div class="invalid-feedback">
        {{ $errors->first('periodeValidity1') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="periodeValidity2">Période de validité 2</label>
    <input name="periodeValidity2" type="date" class="form-control @error('periodeValidity2') is-invalid @enderror" value="{{ old('periodeValidity2') ?? $flight->periodeValidity2 }}">
    @error('periodeValidity2')
    <div class="invalid-feedback">
        {{ $errors->first('periodeValidity2') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="departureTime">Heure de départ</label>
    <input name="departureTime" type="time" class="form-control @error('addrdepartureTime') is-invalid @enderror" value="{{ old('departureTime') ?? $flight->departureTime }}">
    @error('departureTime')
    <div class="invalid-feedback">
        {{ $errors->first('departureTime') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="arrivalTime">Heure d'arrivée</label>
    <input name="arrivalTime" type="time" class="form-control @error('arrivalTime') is-invalid @enderror" value="{{ old('arrivalTime') ?? $flight->arrivalTime }}">
    @error('arrivalTime')
    <div class="invalid-feedback">
        {{ $errors->first('arrivalTime') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="route_id">Itinéraire</label>
    <select name="route_id" id="route_id" class="custom-select @error('route_id') is-invalid @enderror"">
        <option value="0">-- Selectionner un itinéraire --</option>
        @foreach($routes as $route)
        <option value="{{ $route->id }}" {{ $flight->route_id == $route->id ? 'selected' : '' }}>{{ $route->numero }}</option>
        @endforeach
    </select>
    @error('route_id')
    <div class="invalid-feedback">
        {{ $errors->first('route_id') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="airplane_id">Avions</label>
    <select name="airplane_id" id="airplane_id" class="custom-select @error('airplane_id') is-invalid @enderror"">
        <option value="0">-- Selectionner un avion --</option>
        @foreach($airplanes as $airplane)
        <option value="{{ $airplane->id }}" {{ $flight->airplane_id == $airplane->id ? 'selected' : '' }}>{{ $airplane->numero }}</option>
        @endforeach
    </select>
    @error('airplane_id')
    <div class="invalid-feedback">
        {{ $errors->first('airplane_id') }}
    </div>
    @enderror
</div>
