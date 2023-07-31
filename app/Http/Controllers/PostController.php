<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function delete($id)
    {
        return Post::find($id)->delete();

    }

    public function direct()
    {
        return redirect()->back();
    }
    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('ex.update',compact('post','categories'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->contents = $request->contents;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect('/list-posts');
    }
}
