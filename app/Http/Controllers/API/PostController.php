<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //all posts
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    //add Post
    public function add(Request $request)
    {
        $post = new Post([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        $post->save();
        return response()->json('Post added successfully.');
    }

    //edit Post
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    //update Post
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return response()->json('Post updated successfully.');
    }

    //delete Post
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json('Post deleted successfully.');
    }
}