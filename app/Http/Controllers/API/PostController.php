<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       $Post = Post::pagination(10);
        return response()->json([
            "success" => true,
            "message" => "Post List",
            "data" => $Post
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

        $Post = Post::create($input);
            return response()->json([
            "success" => true,
            "message" => "Post created successfully.",
            "data" => $Post
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
    $Post = Post::find($id);
        if (is_null($Post)) {
        return $this->sendError('Post not found.');
        }
        return response()->json([
        "success" => true,
        "message" => "Post retrieved successfully.",
        "data" => $Post
        ]);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Post $Post)
{
    $input = $request->all();
    $validator = Validator::make($input, [
    'name' => 'required',
    ]);
    if($validator->fails()){
    return $this->sendError('Validation Error.', $validator->errors());       
    }

    $Post->name = $input['name'];
    $Post->save();
    return response()->json([
    "success" => true,
    "message" => "Post updated successfully.",
    "data" => $Post
]);
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Post $Post)
{

$Post->delete();
    return response()->json([
    "success" => true,
    "message" => "Post deleted successfully.",
    "data" => $Post
    ]);
}
}
