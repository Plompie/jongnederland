<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicHomePage()
    {
        $posts = Post::all();
        return view('blog.nieuws', ['posts'=>$posts]);
    }
    public function index()
    {
        $posts = Post::all();
        return view('beheer.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beheer.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $postTitle = $request->title;
        $postHeader = $request->header;
        $postBody = $request->body;
        $postUserId = Auth::id();

        if($request->hasFile('image')){
            $postImage = $request->file('image');
            $filename = time() . '.' . $postImage->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($postImage)->save($location);

            $post->image = $filename;
        }

        $post->user_id = $postUserId;
        $post->title = $postTitle;
        $post->header = $postHeader;
        $post->body = $postBody;

        $post->save();

        return redirect()->route('artikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        $data = array(
            'id' => $id,
            'post' => $post
        );

        return view('blog.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('beheer.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::find($id);

      if (isset($request->title)) {
        $postTitle = $request->title;
        $post->title = $postTitle;
      }

      if (isset($request->header)) {
        $postHeader = $request->header;
        $post->header = $postHeader;
      }

      if (isset($request->body)) {
        $postBody = $request->body;
        $post->body = $postBody;
      }

      if($request->hasFile('imageUpdated')){
        $postImage = $request->file('imageUpdated');
        $filename = time() . '.' . $postImage->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($postImage)->save($location);

        $post->image = $filename;
      }

      $post->save();

      if (isset($request->editForm)) {
        return redirect()->route('artikels.index');
      } else {
        return redirect()->route('artikels.show', ['id'=>$id]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('artikels.index');
    }
}
