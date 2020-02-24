@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Pilotes
            </div>
            <div class="card-body">
                <table class="text-center table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nom - Prénom</th>
                            <th scope="col">Licence</th>
                            <th scope="col">Date de validité</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }} {{ $employee->firstName }}</td>
                            <td>{{ $employee->license->numero ?? '' }}</td>
                            <td>{{ date('d-m-Y', strtotime($employee->license->validityDate)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Revenues
            </div>
            <div class="card-body">
                <h4 class="font-weight-bold">{{ $allPrice }} €</h4>
            </div>
        </div>
    </div>
</div>
<div class="row">
</div>
@endsection
