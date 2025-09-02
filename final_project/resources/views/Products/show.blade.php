<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>View Product</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> 
  </head> 
  <body> 
    <div class="container mt-5"> 
      <div class="card"> 
        <div class="card-header"> 
          <h2>View Product</h2> 
        </div> 
        <div class="card-body"> 
          <ul class="list-group list-group-flush"> 
            <li class="list-group-item"> 
              <strong>ID:</strong> {{ $product->id }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Brand:</strong> {{ $product->brand }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Model:</strong> {{ $product->model }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Display:</strong> {{ $product->display }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Weight:</strong> {{ $product->weight }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Quantity:</strong> {{ $product->quantity }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Created At:</strong> {{ $product->created_at }} 
            </li> 
            <li class="list-group-item"> 
              <strong>Updated At:</strong> {{ $product->updated_at }} 
            </li> 
          </ul> 
        </div> 
        <div class="card-footer"> 
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a> 
        </div> 
      </div> 
    </div> 
  </body> 
</html>
