<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\post;
use App\Models\contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name = Auth::user()->name;
        $post = post::where('username','=',$name)->get();


        return view('home', compact('post'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function form()
    {
        return view('form');
    }

    public function action(Request $request){
        $data = new contact;
        $data->Name=Auth::user()->name;

        $data->FirstName=$request->FirstName;
        $data->LastName=$request->LastName;
        $data->Country=$request->Country;
        $data->Subject=$request->Subject;

        $data->save();
        return redirect('home')->with('message','Your issue has been saved');

    }
    public function upload(Request $request)
    {
        $data = new post;

        $data->username = Auth::user()->name;
        $data->description = $request->description;
        // @Image

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('post', $imageName);
            // @endImage
            $data->image = $imageName;
        }
        $data->save();
        return redirect('/home');

    }
    public function update_post($id)
    {

        $data = post::find($id);
        return view('update', compact('data'));

    }
    public function confirm(Request $request, $id)
    {

        $post = post::find($id);
        $post->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('post', $imageName);
            // @endImage
            $post->image = $imageName;


        }
        $post->save();
        return redirect('/home');
    }
    public function delete_post($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect()->back();

    }
}
