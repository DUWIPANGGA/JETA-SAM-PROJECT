<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request){
        $category = Category::all();

        return response()->json([
            'success' => true,
            'message' => 'Category was Found',
            'data' => $category
        ], 200);
    }

    public function store (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $category = Category::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category added',
            'data' => $category
        ], 201);
    }

    public function update(Request $request, $id){
        $category=Category::find($id);

        if (!$category){
            return response()->json([
                'success' => false,
                'message' => 'Category not Found'
            ], 404);
        }

        $validator=Validator::make($request->all(), [
            'name'  => 'required|max:255'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Update Category Cancelled'
            ], 422);
        }

        $category->update([
            'name' => $request->name
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category Updated successfully',
            'data' => $category
        ], 200);
    }

    public function destroy ($id){
        $category=Category::find($id);

        if(!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not Found'
            ], 400);
        }

        $category -> delete();

        return response()->json([
            'success' => true,
            'message' => 'Category Destroy'
        ], 200);
    }


}
