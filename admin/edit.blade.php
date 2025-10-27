@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Admin</h2>

    <form action="{{ route('admins.update', $admin->AdminId) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="FullName" value="{{ $admin->FullName }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="Email" value="{{ $admin->Email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password (leave blank if not changing)</label>
            <input type="password" name="Password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Admin</button>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
