<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    public function index()
    {
       $category = Category::pagination(10);
        return response()->json([
            "success" => true,
            "message" => "Category List",
            "data" => $category
        ]);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
        'name' => 'required'
        ]);

        if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors());       
        }

        $category = Category::create($input);
            return response()->json([
            "success" => true,
            "message" => "Category created successfully.",
            "data" => $category
        ]);
} 
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
    $category = Category::find($id);
        if (is_null($category)) {
        return $this->sendError('Category not found.');
        }
        return response()->json([
        "success" => true,
        "message" => "Category retrieved successfully.",
        "data" => $category
        ]);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Category $category)
{
    $input = $request->all();
    $validator = Validator::make($input, [
    'name' => 'required',
    ]);
    if($validator->fails()){
    return $this->sendError('Validation Error.', $validator->errors());       
    }

    $category->name = $input['name'];
    $category->save();
    return response()->json([
    "success" => true,
    "message" => "Category updated successfully.",
    "data" => $category
]);
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Category $category)
{

$category->delete();
    return response()->json([
    "success" => true,
    "message" => "Category deleted successfully.",
    "data" => $category
    ]);
}
}
