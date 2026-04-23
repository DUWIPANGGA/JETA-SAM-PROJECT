<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request){
        $product = Product::with(['category','variants'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Product was Found',
            'data' => $product
        ], 200);
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(), [
            'category_id'=>'required|exists:categories,id',
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|integer',
            'stock'=>'required|integer',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'status'=>'required|in:active,inactive'
        ]);

        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>'Product not Found',
                'errors'=>$validator->errors()
            ], 422);
        }

        $image = $request->file('image');
        $imageName= time() .'.'. $image->getClientOriginalExtension();

        $image->move(public_path('products'), $imageName);

        $product = Product::create([
            'category_id'   => $request->category_id,
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'image'         => 'products/'. $imageName,
            'status'        => $request->status
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Product Added',
            'data' => $product
        ], 201);

    }

    public function update(Request $request, $id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }

    $validator = Validator::make($request->all(), [
        'category_id' => 'required|exists:categories,id',
        'name'        => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
        'price'       => 'required|integer',
        'stock'       => 'required|integer',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ubah ke nullable agar tidak wajib upload ulang
        'status'      => 'required|in:active,inactive'
    ]);

    if ($validator->fails()){
        return response()->json([
            'success' => false,
            'message' => 'Update Product Cancelled',
            'errors'  => $validator->errors()
        ], 422);
    }

    $imagePath = $product->image;

    // Jika ada file gambar baru yang diunggah
    if ($request->hasFile('image')){
        
        // 1. Hapus gambar lama dari folder public/products (jika ada)
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        
        // 2. Proses gambar baru
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // 3.  Pindahkan ke public/products
        $image->move(public_path('products'), $imageName);
        $imagePath = 'products/' . $imageName;
    }

    $product->update([
        'category_id' => $request->category_id,
        'name'        => $request->name, 
        'description' => $request->description,
        'price'       => $request->price,
        'stock'       => $request->stock,
        'image'       => $imagePath,
        'status'      => $request->status
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Product Updated successfully',
        'data'    => $product
    ], 200);
}

    public function destroy ($id){
        $product=Product::find($id);

        if(!$product){
            return response()->json([
                'success' => false,
                'message' => 'Product not found',
            ], 404);
        }

        if($product->image && file_exsist(public_path($product->image))){
            unlink(public_path($product->image));
        }

        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product Deleted'
        ], 200);
    }
}
