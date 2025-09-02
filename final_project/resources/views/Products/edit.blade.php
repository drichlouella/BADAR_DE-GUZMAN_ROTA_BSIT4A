<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
<div class="card">
<div class="card-header">
<h2>Edit Product</h2>
</div>
<div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand"
                        value="{{ old('brand', $product->brand) }}" placeholder="Enter brand name">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model"
                        value="{{ old('model', $product->model) }}" placeholder="Enter model name">
                </div>
                <div class="mb-3">
                    <label for="display" class="form-label">Display</label>
                    <input type="text" class="form-control" id="display" name="display"
                        value="{{ old('display', $product->display) }}" placeholder="Enter display details">
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight"
                        value="{{ old('weight', $product->weight) }}" placeholder="Enter weight">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"
                        value="{{ old('quantity', $product->quantity) }}" placeholder="Enter quantity">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </form>
        </div>
    </div>
</div>

</body>

</html>