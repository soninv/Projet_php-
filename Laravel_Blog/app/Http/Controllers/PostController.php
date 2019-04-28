<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //taking category from GET param

        $category = Input::get('category');
        

        //taking post with related user
        
        $posts = Post::with('user')->where('category', $category)->orderBy('created_at', 'desc')->get();

        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function getLast() {
        return  Post::with('user')->orderBy('created_at', 'desc')->take(3)->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the request

        $this->validate($request, [
            'title' => 'required|string',
            'text' => 'required|string',
            'category' => 'required|string',
            'user_id' => 'required',
            'image' => 'required'
        ]);

        $post = new Post();
        

        //saving file in public/image directory

        if(Input::file())
        {

            $image = Input::file('image');
            $filename = time().'.'.request()->image->getClientOriginalExtension();
            $path = public_path('images\\' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $post->image = "\images\\".$filename;
        }
        //saving post
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->user_id = $request->input('user_id');
        $post->category = $request->input('category');

        $post->save();

        return 'Saved';





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json([
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(Input::file())
        {
            //delete old image
            $oldImagePath = app_path()."//../public".$post->image;

            if(is_file($oldImagePath)){
                unlink($oldImagePath);
            }



            //save new 
            $image = Input::file('image');
            $filename = time().'.'.request()->image->getClientOriginalExtension();
            $path = public_path('images\\' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $post->image = "\images\\".$filename;
        }

        $post->title  = $request->input('title');
        $post->text  = $request->input('text');
        $post->save();
        
        return "Edited";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //delete old image
        $oldImagePath = app_path()."//../public".$post->image;

        if(is_file($oldImagePath)){
            unlink($oldImagePath);
        }

        $post->delete();

        return 'Deleted';
    }
}
