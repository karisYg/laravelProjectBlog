<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         // $posts = Post::paginate(5);
        // $posts = Post::orderBy('title','asc')->get();
        //return $post = Post::where('title','post two')->get();
        //$posts= DB::select('SELECT * FROM posts ');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        $posts = Post::orderBy('id','desc')->paginate(3);
        // return 'love';
        return view('posts.index' ,compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return 'love';
        $this->validate($request,[
            'title'=>'required|unique:posts',
            'body'=>'required'
            ]);
        //create post
        $post = new Post;
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
            ]);


        //update post
        $post = Post::find($id);
        $post->title= $request->input('title');
        $post->body=$request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post removed');

    }
}
