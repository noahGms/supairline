@csrf
<div class="form-group">
    <label for="socialNumero">Numéro de sécurité social</label>
    <input name="socialNumero" type="text" class="form-control @error('socialNumero') is-invalid @enderror" value="{{ old('socialNumero') ?? $employee->socialNumero }}">
    @error('socialNumero')
    <div class="invalid-feedback">
        {{ $errors->first('socialNumero') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Nom</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $employee->name }}">
    @error('name')
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="firstName">Prénom</label>
    <input name="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" value="{{ old('firstName') ?? $employee->firstName }}">
    @error('firstName')
    <div class="invalid-feedback">
        {{ $errors->first('firstName') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="address">Adresse</label>
    <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ?? $employee->address }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $errors->first('address') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="city_id">Ville</label>
    <select name="city_id" id="city_id" class="custom-select @error('city_id') is-invalid @enderror"">
        <option>-- Selectionner une ville --</option>
        @foreach($cities as $city)
        <option value="{{ $city->id }}" {{ $employee->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }} - {{ $city->zipCode }}</option>
        @endforeach
    </select>
    @error('city_id')
    <div class="invalid-feedback">
        {{ $errors->first('city_id') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="salary">Salaire</label>
    <input name="salary" type="text" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') ?? $employee->salary }}">
    @error('salary')
    <div class="invalid-feedback">
        {{ $errors->first('salary') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="hours">Nombre d'heure</label>
    <input name="hours" type="text" class="form-control @error('hours') is-invalid @enderror" value="{{ old('hours') ?? $employee->hours }}">
    @error('hours')
    <div class="invalid-feedback">
        {{ $errors->first('hours') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="license_id">Licence</label>
    <select name="license_id" id="license_id" class="custom-select @error('license_id') is-invalid @enderror">
        <option>-- Selectionner une licence --</option>
        @foreach($licenses as $license)
        <option value="{{ $license->id }}" {{ $employee->license_id == $license->id ? 'selected' : '' }}>{{ $license->numero }}</option>
        @endforeach
    </select>
    @error('license_id')
    <div class="invalid-feedback">
        {{ $errors->first('license_id') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesFunction_id">Fonction</label>
    <select name="employeesFunction_id" id="employeesFunction_id" class="custom-select @error('employeesFunction_id') is-invalid @enderror"">
        <option>-- Selectionner une fonction --</option>
        @foreach($employeesFunctions as $ef)
        <option value="{{ $ef->id }}" {{ $employee->employeesFunction_id == $ef->id ? 'selected' : '' }}>{{ $ef->name }}</option>
        @endforeach
    </select>
    @error('employeesFunction_id')
    <div class="invalid-feedback">
        {{ $errors->first('employeesFunction_id') }}
    </div>
    @enderror
</div>