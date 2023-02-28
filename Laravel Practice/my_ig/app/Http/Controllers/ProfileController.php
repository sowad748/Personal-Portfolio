<?php

namespace App\Http\Controllers;
use \App\Models\Profile;

use \App\Models\User;




use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        $follows= (auth()->user()) ? auth()->user()->following->contains($user->profile->id) : false;
        return view('profiles.index',compact('user','follows'));
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));

    }
    public function update(Request $request,User $user){
        $this->authorize('update', $user->profile);
        $request->validate([
            'title'=>"required",
            'description'=>"required",
            // 'dp'=>"image",
        ]);
        $data = new Profile;


        $data->user_id = auth()->user()->id;;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->username= $request->username;

        //image part...

        $dpName = time() . '.' . $request->dp->getClientOriginalExtension();



        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->dp->move('dp', $dpName);
        $data->dp = $dpName;


        $data->save();


       return view('profiles.index', compact('user'));

    }

}

