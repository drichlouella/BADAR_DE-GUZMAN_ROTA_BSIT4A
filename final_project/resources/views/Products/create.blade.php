<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Create Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
<div class="card">
<div class="card-header">
<h2>Create New Product</h2>
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
            
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand"
                        placeholder="Enter brand name" value="{{ old('brand') }}">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model"
                        placeholder="Enter model name" value="{{ old('model') }}">
                </div>
                <div class="mb-3">
                    <label for="display" class="form-label">Display</label>
                    <input type="text" class="form-control" id="display" name="display"
                        placeholder="Enter display details" value="{{ old('display') }}">
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight"
                        placeholder="Enter weight in kg or lbs" value="{{ old('weight') }}">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"
                        placeholder="Enter quantity" value="{{ old('quantity') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </form>
        </div>
    </div>
</div>

</body>

</html>