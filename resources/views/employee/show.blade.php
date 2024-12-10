@extends('layouts.app')
@section('content')

    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 rounded-3 col-xl-4 border" style="background-color:rgb(255,188,224)">
                <div class="mb-3 text-center">
                    <h1><i class="bi bi-person-hearts" style="color: maroon"></i></h1>
                    <h4>Detail Employee</h4>
                </div>
                <hr>
                <div class="row text-danger">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <h5>{{ $employee->firstname }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <h5>{{ $employee->lastname }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <h5>{{ $employee->email }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <h5>{{ $employee->age }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Position</label>
                        <h5>{{ $employee->position->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
