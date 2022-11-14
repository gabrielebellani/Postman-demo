<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Post::all());
    }

    function create(Request $request){
        $validator = Validator::make($request->all(), [
           'title'=>'string|max:300',
           'author'=>'string|max:300',
           'content'=>'string|max:5000',
           'featured_image'=>'string|max:1000',
        ]);

        if($validator->fails()){
            return response()->json('Validation error', 400);
        }

        $post = new Post;
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->content = $request['content'];
        $post->featured_image = $request['featured_image'];
        if($post->save()){
            return response()->json('', 201);
        }else{
            return response()->json('Server error', 500);
        }
    }
}
