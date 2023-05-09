<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Product::all(), 200);
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json($product, 200);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
       $product = Product::create(
         $request->validated()
        );

        return response()->json('Product created', 200);
    }
}
