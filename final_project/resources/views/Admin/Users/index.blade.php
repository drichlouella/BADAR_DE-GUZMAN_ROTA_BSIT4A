@extends('layouts.app') @section('content') <div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>Manage User Accounts</h2>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody> @foreach($users as $user) <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
            <td>
              <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
              </form>
            </td>
          </tr> @endforeach </tbody>
      </table>
    </div>
  </div>
</div> @endsection