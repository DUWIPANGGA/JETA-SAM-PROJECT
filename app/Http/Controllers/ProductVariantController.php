<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Validaator;

class ProductVariantController extends Controller
{
    public function index(){
        $variants=ProductVariant::with('product')->get();
        return response()->json([
            'success' => true,
            'data' => $variants
        ], 200);
    }
    
    public function check_stock(Request $request, $product_id, $variant_id){
        $quantity=$request->query('quantity', 1);

        $variant=ProductVariant::where('id', $variant_id)->where('product_id', $product_id)->first();

        if (!$variant){
            return response()->json([
                'success' => false,
                'message' => 'Variant not Found'
            ], 404);
        }

        $isAvailable=$variant->stock >= $quantity;

        return response()->json([
            'success' => true,
            'data' => [
                'stock' => $variant->stock,
                'proce_adjustment' => (int)$variant->price_adjustment,
                'is_available' => $isAvailable
            ]
              
        ], 200);
    }
}
