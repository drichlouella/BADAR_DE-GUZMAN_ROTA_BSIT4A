@extends('layouts.app')

@section('content')

<style>
  body {
    background-color: #f8f9fa; 
  }

  .admin-container {
    display: flex;
    justify-content: center;
    align-items: flex-start; 
    padding: 3rem 0;
  }

  .card {
    border-radius: 1rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    background-color: #fff;
    width: 100%;
    max-width: 900px;
    padding: 2rem;
  }

  .card-header {
    text-align: center;
    margin-bottom: 2rem;
  }

  h2 {
    font-weight: 700;
    color: #212529;
    font-size: 1.75rem; 
  }

  .table-container {
    border-radius: 0.75rem;
    overflow: hidden;
  }

  .table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 0.4rem; 
  }

  .table thead th {
    background-color: #e9ecef;
    font-weight: 600;
    color: #495057;
    padding: 1rem 1.25rem;
    border: none;
    text-align: left;
  }

  .table tbody tr {
    background-color: #ffffff;
    border-radius: 0.5rem;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
  }

  .table tbody tr:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transform: translateY(-2px);
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .table tbody td {
    padding: 1rem 1.25rem;
    vertical-align: middle;
  }

  .btn-group {
    display: flex;
    gap: 0.5rem; 
  }

  .btn {
    border-radius: 0.5rem;
    font-weight: 500;
    padding: 0.5rem 1rem; 
    transition: all 0.2s ease-in-out;
    text-transform: uppercase;
    font-size: 0.8rem; 
  }

  .btn-view {
    background-color: #44a2f5ff;
    border-color: #44a2f5ff;
    color: #fff;
  }

  .btn-view:hover {
    background-color: #44a2f5ff;
    border-color:  #44a2f5ff;
  }

  .btn-edit {
    background-color: #28a745;
    border-color: #28a745;
    color: #fff;
  }

  .btn-edit:hover {
    background-color: #218838;
    border-color: #1e7e34;
  }

  .btn-delete {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
  }

  .btn-delete:hover {
    background-color: #c82333;
    border-color: #bd2130;
  }
</style>

<div class="admin-container">
  <div class="card">
    <div class="card-header">
      <h2>Admin Dashboard - Manage Users</h2>
    </div>

    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-container">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role === 'admin' ? 'Admin' : 'Supplier' }}</td>
                <td class="text-end">
                  <div class="btn-group" role="group">
                    <a href="{{ route('admin.users.show', $user) }}" class="btn btn-view">View</a>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-center fst-italic text-muted">No users found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
