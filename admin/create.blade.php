@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Admin</h2>

    <form action="{{ route('admins.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="FullName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="Email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="Password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save Admin</button>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
