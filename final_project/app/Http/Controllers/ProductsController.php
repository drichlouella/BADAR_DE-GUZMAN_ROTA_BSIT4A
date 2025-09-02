<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductsController extends Controller
{
    use AuthorizesRequests;
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'display' => 'required|string|max:255',
            'weight' => 'required|numeric',
        ]);
        
        $product = Product::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'quantity' => $request->quantity,
            'display' => $request->display,
            'weight' => $request->weight,
            'user_id' => Auth::id(),
        ]);

        if ($product) {
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } else {
            return redirect()->back()->with('error', 'Product creation failed.');
        }
    }

    public function show(Product $product)
    {
        $this->authorize('view', $product);
        
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);
        
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'display' => 'required|string|max:255',
            'weight' => 'required|numeric',
        ]);
        
        $product->update($request->all());
        
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        
        $product->delete();
        
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
