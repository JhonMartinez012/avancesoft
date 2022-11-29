<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->categoryId) {
            $products = Product::with('category', 'supplier')
                        ->where('categoryId', $request->categoryId)
                        ->paginate(10);
        } else if($request->supplierId) {
            $products = Product::with('category', 'supplier')
                        ->where('supplierId', $request->supplierId)
                        ->paginate(10);
        } else {
            $products = Product::with('category', 'supplier')->paginate(10);            
        }
        return response()->json($products);
    }
}
