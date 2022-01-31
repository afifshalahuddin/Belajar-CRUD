<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.post.index',[
        'post' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create',[
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
       $validatedData=  $request->validate([
            'title' => 'required|max:255',
            'excerp' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        Post::create($validatedData);
       return redirect('/dashboard/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',[
          'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('admin');
        return view('dashboard.post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'excerp' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:2048',
        ];

        
        $validatedData=$request->validate($rules);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        
        Post::where('id', $post->id)->update($validatedData);
       return redirect('/dashboard/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/post');
    }
}