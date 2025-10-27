@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Alumni</h2>

    <form action="{{ route('alumni.update', $alumni->AlumniId) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Full Name</label>
                <input type="text" name="FullName" value="{{ $alumni->FullName }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Graduation Year</label>
                <input type="number" name="GraduationYear" value="{{ $alumni->GraduationYear }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Section</label>
                <input type="text" name="Section" value="{{ $alumni->Section }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="Email" value="{{ $alumni->Email }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Contact Number</label>
                <input type="text" name="ContactNumber" value="{{ $alumni->ContactNumber }}" class="form-control">
            </div>

            <div class="col-md-12 mb-3">
                <label>Current Occupation/Education</label>
                <input type="text" name="CurrentOccupationEducation" value="{{ $alumni->CurrentOccupationEducation }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Status</label>
                <select name="Status" class="form-select">
                    <option value="active" {{ $alumni->Status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $alumni->Status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Alumni</button>
        <a href="{{ route('alumni.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
