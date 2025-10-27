@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Alumni</h2>

    <form action="{{ route('alumni.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Full Name</label>
                <input type="text" name="FullName" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Graduation Year</label>
                <input type="number" name="GraduationYear" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Section</label>
                <input type="text" name="Section" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="Email" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Password</label>
                <input type="password" name="Password" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Contact Number</label>
                <input type="text" name="ContactNumber" class="form-control">
            </div>

            <div class="col-md-12 mb-3">
                <label>Current Occupation/Education</label>
                <input type="text" name="CurrentOccupationEducation" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Status</label>
                <select name="Status" class="form-select">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Alumni</button>
        <a href="{{ route('alumni.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
