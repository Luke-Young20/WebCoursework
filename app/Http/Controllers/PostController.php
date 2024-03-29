<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Author;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use App\Services\Facebook;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function exampleFacebook(Post $fb, Facebook $fbpost){

        $fbpost->postfb("I'm posting from exampleFacebook! ");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;print_r($id);
        $authors = Author::orderBy('name', 'asc')->get();
        return view('posts.create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            ]
        );

        $newImageName = time() . '-' . $request->title . '.' .
        $request->image->extension();
        
        $request->image->move(public_path('images'), $newImageName);

        //creating a new post here
        $a = new Post;
        $a->title = $validatedData['title'];
        $a->content = $validatedData['content'];
        $a->author_id = Auth::id();
        $a->image_path = $newImageName;
        $a->save();

        session()->flash('message', 'Post successfully created.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();
        $tags = Post::find($id)->tags;
        return view('posts.show', ['post' => $post, 'comments' => $comments, 'tags' => $tags]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function edit($id)
    {

        $post = Post::findOrFail($id);


            if($post->author_id == Auth::id()OR Auth::user()->type == 'admin') {
               //remove all but this line and the findorfail to remove the auth
                return view('posts.edit', ['post' => $post]);} 
            else {
                return redirect()->route('posts.index')->with('message','Post cannot be updated, it is not your post.'); 
               }
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
        $validatedData = $this->validate($request, [
            'title' => 'required',
            'content' => 'required'

        ]);

        $input = $request->all();

        $post = Post::findOrFail($id);
        $newImageName = time() . '-' . $request->title;
        


        $post->image_path = $newImageName;
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();
    
        session()->flash('message', 'post successfully updated!');
    
        return redirect()->route('posts.index');

    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $post = Post::findOrFail($id);

            if($post->author_id == Auth::id() OR Auth::user()->type == 'admin') {
                $post->delete();
                return redirect()->route('posts.index')->with('message','Post was deleted.'); 
               } else {

            return redirect()->route('posts.index')->with('message','Post was not deleted, it is not your post.'); 
               }
    }
}
