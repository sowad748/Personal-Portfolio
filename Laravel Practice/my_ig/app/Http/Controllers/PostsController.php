<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        //    $data = request()->validate([
        //     'caption'=>'required',
        //     'image'=>['required','image'],
        //    ]);

        //    auth()->user()->posts()->create($data);

        //    dd(request()->all());
        $request->validate([
            'caption'=>"required",
            'image'=>"required | image"
        ]);

        $data = new Post;
        $data->user_id = auth()->user()->id;
        $data->caption = $request->caption;
        //image part...
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->image->move('upload', $imageName);
        $data->image = $imageName;




        $data->save();

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Post $post){
        $user= auth()->user()->username;

        return view('posts.show', compact('post','user'));
    }
}
