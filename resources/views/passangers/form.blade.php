@csrf
<div class="form-group">
    <label for="numero">Numéro</label>
    <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $passanger->numero }}">
    @error('numero')
    <div class="invalid-feedback">
        {{ $errors->first('numero') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Nom</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $passanger->name }}">
    @error('name')
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="firstName">Prénom</label>
    <input name="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" value="{{ old('firstName') ?? $passanger->firstName }}">
    @error('firstName')
    <div class="invalid-feedback">
        {{ $errors->first('firstName') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="address">Adresse</label>
    <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ?? $passanger->address }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $errors->first('address') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="city_id">Ville</label>
    <select name="city_id" id="city_id" class="custom-select @error('city_id') is-invalid @enderror"">
        <option value="0">-- Selectionner une ville --</option>
        @foreach($cities as $city)
        <option value="{{ $city->id }}" {{ $passanger->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }} {{ $city->zipCode }}</option>
        @endforeach
    </select>
    @error('city_id')
    <div class="invalid-feedback">
        {{ $errors->first('city_id') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="job">Profession</label>
    <input name="job" type="text" class="form-control @error('job') is-invalid @enderror" value="{{ old('job') ?? $passanger->job }}">
    @error('job')
    <div class="invalid-feedback">
        {{ $errors->first('job') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="bank">Banque</label>
    <input name="bank" type="text" class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank') ?? $passanger->bank }}">
    @error('bank')
    <div class="invalid-feedback">
        {{ $errors->first('bank') }}
    </div>
    @enderror
</div>
