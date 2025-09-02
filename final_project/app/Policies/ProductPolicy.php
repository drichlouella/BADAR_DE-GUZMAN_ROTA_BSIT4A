<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Product $product)
    {
     return true;
    }

    public function update(User $user, Product $product)
    {
    return true;
    }

    public function delete(User $user, Product $product)
    {
  return true;
    }
}
