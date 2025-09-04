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
    .form-control[readonly] {
        background-color: #e9ecef;
        color: #495057;
        border: none;
        box-shadow: none;
    }
    .btn-secondary {
        background-color: #44a2f5ff;
        border-color: #44a2f5ff;
        color: #fff;
        font-weight: 600;
        padding: 0.5rem 1.5rem;
        border-radius: 0.5rem;
        margin-top: 1rem;
        transition: background 0.2s;
    }
    .btn-secondary:hover {
        background-color: #1d7ed6;
        border-color: #1d7ed6;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>User Details: {{ $user->name }}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">User Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ ucfirst($user->role) }}" readonly>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection