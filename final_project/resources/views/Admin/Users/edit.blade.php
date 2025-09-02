@extends('layouts.app')

@section('content')

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
                <label for="is_admin" class="form-label">User Role</label>
                <select class="form-control" id="is_admin" name="is_admin" required>
                    <option value="0" {{ old('is_admin', $user->is_admin) == 0 ? 'selected' : '' }}>Supplier</option>
                    <option value="1" {{ old('is_admin', $user->is_admin) == 1 ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

</div>
@endsection