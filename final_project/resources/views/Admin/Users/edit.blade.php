@extends('layouts.app')

@section('content')

<style>
    .card {
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        background-color: #fff;
        width: 100%;
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
    }
    .card-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    h2 {
        font-weight: 700;
        color: #212529;
        font-size: 1.5rem;
    }
    .form-label {
        font-weight: 600;
        color: #495057;
    }
    .form-control {
        border-radius: 0.5rem;
        font-size: 1rem;
    }
    .btn-primary {
        background-color: #44a2f5ff;
        border-color: #44a2f5ff;
        color: #fff;
        font-weight: 600;
        padding: 0.5rem 1.5rem;
        border-radius: 0.5rem;
        margin-top: 1rem;
        transition: background 0.2s;
    }
    .btn-primary:hover {
        background-color: #1d7ed6;
        border-color: #1d7ed6;
    }
    .btn-secondary {
        background-color: #28a745;
        border-color: #28a745;
        color: #fff;
        font-weight: 600;
        padding: 0.5rem 1.5rem;
        border-radius: 0.5rem;
        margin-top: 1rem;
        margin-left: 10px;
        transition: background 0.2s;
    }
    .btn-secondary:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Edit User: {{ $user->name }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">User Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="supplier" {{ old('role', $user->role) == 'supplier' ? 'selected' : '' }}>Supplier</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection