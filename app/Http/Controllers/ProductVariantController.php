<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Validator;

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
                'price_adjustment' => (int)$variant->price_adjustment,
                'is_available' => $isAvailable
            ]
              
        ], 200);
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(), [
        'product_id' => 'required|exists:products,id',
        'size' => 'required',
        'color' => 'required',
        'stock' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validation Failed',
                'data' => $validator->errors()
            ], 422);
        }

        $variant=ProductVariant::crate([
            'product_id' => $request->product_id,
            'size' => $request->size,
            'color' => $request->color,
            'stock' => $request->stock,
            'price_adjustment' => $request->price_adjustment
        ]);

        return response()->json([
            'succsess' => true,
            'message' => 'Variant Added Successfully',
            'data'=> $variant 
        ], 201);    
    }

    public function update(Request $request, $id){
        $variant=ProductVariant::find($id);

        if(!$variant){
            return response()->json([
                'success' => false,
                'message' => 'Variant not Found'
            ], 404);
        }

        $validator=Validator::make($request->all(),[
            'size' => 'required|string',
            'color' => 'required|string',
            'stock' => 'required|integer',
            'price_adjustment' => 'nullable|integer'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Update Failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $variant-update([
            'size' => $request->size,
            'color' => $request->color,
            'stock' => $request->stock,
            'price_adjustment' => $request->price_adjustment ?? 0
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Variant Updated Successfully',
            'data' => $variant
        ], 200);
    }

    public function destroy($id){
        $variant=ProductVariant::find($id);

        if(!$variant){
            return response()->json([
                'success' => false,
                'message' => 'Product Variant not Found'
            ], 404);
        }

        $variant->delete();

        return response()->json([
            'success' => true,
            'message' => 'Variant Deleted Successfully'
        ], 200);
    }
}
