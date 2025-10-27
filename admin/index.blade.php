@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Admin List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">Add Admin</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $admin)
                <tr>
                    <td>{{ $admin->AdminId }}</td>
                    <td>{{ $admin->FullName }}</td>
                    <td>{{ $admin->Email }}</td>
                    <td>
                        <a href="{{ route('admins.edit', $admin->AdminId) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admins.destroy', $admin->AdminId) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No admins found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
