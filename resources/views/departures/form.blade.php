@csrf
<div class="form-group">
    <label for="numero">Numéro</label>
    <input name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $departure->numero }}">
    @error('numero')
    <div class="invalid-feedback">
        {{ $errors->first('numero') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="departureDate">Date de dépapart</label>
    <input name="departureDate" type="date" class="form-control @error('departureDate') is-invalid @enderror" value="{{ old('departureDate') ?? $departure->departureDate }}">
    @error('departureDate')
    <div class="invalid-feedback">
        {{ $errors->first('departureDate') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="placeEmpty">Place libre</label>
    <input name="placeEmpty" type="number" class="form-control @error('placeEmpty') is-invalid @enderror" value="{{ old('placeEmpty') ?? $departure->placeEmpty }}">
    @error('placeEmpty')
    <div class="invalid-feedback">
        {{ $errors->first('placeEmpty') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="placeUsed">Place occupée</label>
    <input name="placeUsed" type="number" class="form-control @error('placeUsed') is-invalid @enderror" value="{{ old('placeUsed') ?? $departure->placeUsed }}">
    @error('placeUsed')
    <div class="invalid-feedback">
        {{ $errors->first('placeUsed') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="departureTime">Heure de départ</label>
    <input name="departureTime" type="time" class="form-control @error('addrdepartureTime') is-invalid @enderror" value="{{ old('departureTime') ?? $departure->departureTime }}">
    @error('departureTime')
    <div class="invalid-feedback">
        {{ $errors->first('departureTime') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesPiloteId">Pilote 1</label>
    <select name="employeesPiloteId" id="employeesPiloteId" class="custom-select @error('employeesPiloteId') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesPiloteId == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesPiloteId')
    <div class="invalid-feedback">
        {{ $errors->first('employeesPiloteId') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesPiloteId1">Pilote 2</label>
    <select name="employeesPiloteId1" id="employeesPiloteId1" class="custom-select @error('employeesPiloteId1') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesPiloteId1 == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesPiloteId1')
    <div class="invalid-feedback">
        {{ $errors->first('employeesPiloteId1') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesMemberId1">Membre d'équipage 1</label>
    <select name="employeesMemberId1" id="employeesMemberId1" class="custom-select @error('employeesMemberId1') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesMemberId1 == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesMemberId1')
    <div class="invalid-feedback">
        {{ $errors->first('employeesMemberId1') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesMemberId2">Membre d'équipage 2</label>
    <select name="employeesMemberId2" id="employeesMemberId2" class="custom-select @error('employeesMemberId2') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesMemberId2 == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesMemberId2')
    <div class="invalid-feedback">
        {{ $errors->first('employeesMemberId2') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesMemberId3">Membre d'équipage 3</label>
    <select name="employeesMemberId3" id="employeesMemberId3" class="custom-select @error('employeesMemberId3') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesMemberId3 == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesMemberId3')
    <div class="invalid-feedback">
        {{ $errors->first('employeesMemberId3') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="employeesMemberId4">Membre d'équipage 4</label>
    <select name="employeesMemberId4" id="employe" class="custom-select @error('employeesMemberId4') is-invalid @enderror">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ $departure->employeesMemberId4 == $employee->id ? 'selected' : '' }}>{{ $employee->name }} {{ $employee->firstName }}</option>
        @endforeach
    </select>
    @error('employeesMemberId4')
    <div class="invalid-feedback">
        {{ $errors->first('employeesMemberId4') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="flight_id">Vol</label>
    <select name="flight_id" id="flight_id" class="custom-select @error('flight_id') is-invalid @enderror"">
        <option>-- Selectionner un itinéraire --</option>
        @foreach($flights as $flight)
        <option value=" {{ $flight->id }}" {{ $departure->flight_id == $flight->id ? 'selected' : '' }}>{{ $flight->numero }}</option>
        @endforeach
    </select>
    @error('flight_id')
    <div class="invalid-feedback">
        {{ $errors->first('flight_id') }}
    </div>
    @enderror
</div>
