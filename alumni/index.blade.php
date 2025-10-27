@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Alumni List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('alumni.create') }}" class="btn btn-primary mb-3">Add Alumni</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Graduation Year</th>
                <th>Section</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Occupation/Education</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alumni as $a)
                <tr>
                    <td>{{ $a->AlumniId }}</td>
                    <td>{{ $a->FullName }}</td>
                    <td>{{ $a->GraduationYear }}</td>
                    <td>{{ $a->Section ?? 'N/A' }}</td>
                    <td>{{ $a->Email }}</td>
                    <td>{{ $a->ContactNumber ?? 'N/A' }}</td>
                    <td>{{ $a->CurrentOccupationEducation ?? 'N/A' }}</td>
                    <td>{{ ucfirst($a->Status) }}</td>
                    <td>
                        <a href="{{ route('alumni.edit', $a->AlumniId) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('alumni.destroy', $a->AlumniId) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No alumni found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
