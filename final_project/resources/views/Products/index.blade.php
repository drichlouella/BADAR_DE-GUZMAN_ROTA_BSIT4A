<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
        color: #333;
      }

      .products-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }

      .products-table th,
      .products-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      .products-table th {
        background-color: #f2f2f2;
        color: #555;
        text-transform: uppercase;
        font-size: 14px;
      }

      .products-table tbody tr:hover {
        background-color: #f9f9f9;
      }

      .btn {
        padding: 8px 12px;
        text-decoration: none;
        color: white;
        border-radius: 4px;
        font-size: 14px;
        display: inline-block;
      }

      .create-btn {
        background-color: #007bff;
        float: right;
        margin-bottom: 20px;
        padding: 10px 20px;
      }

      .view-btn {
        background-color: #ffc107;
      }

      .edit-btn {
        background-color: #28a745;
        margin-left: 5px;
      }

      .delete-btn {
        background-color: #dc3545;
        margin-left: 5px;
      }

      .actions {
        white-space: nowrap;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div>
          @auth
            <span class="fw-bold">{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline; margin-left: 10px;">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
            @if(Auth::user()->role === 'admin')
              <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm" style="margin-left: 10px;">Go to Dashboard</a>
            @endif
          @endauth
        </div>
        <a href="{{ route('products.create') }}" class="btn create-btn">Create</a>
      </div>
      <h1>Products</h1>
      <table class="products-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Display</th>
            <th>Weight</th>
            <th>Quantity</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody> @foreach($products as $product) <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->display }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td class="actions">
              <a href="{{ route('products.show', $product->id) }}" class="btn view-btn">View</a>
              <a href="{{ route('products.edit', $product->id) }}" class="btn edit-btn">Edit</a>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;"> @csrf @method('DELETE') <button type="submit" class="btn delete-btn">Delete</button>
              </form>
            </td>
          </tr> @endforeach </tbody>
      </table>
    </div>
  </body>
</html>