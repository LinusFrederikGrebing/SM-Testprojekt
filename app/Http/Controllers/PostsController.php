<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Post;
use App\Models\User;


class PostsController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function show(\App\Models\Post $post)
  {
      return view('posts/show', compact('post'));
  }
 
  public function index(){
      $user = auth()->user()->following()->pluck('profiles.user_id');
      
      $posts = Post::whereIn('user_id', $user)->with('user')->orderBy('created_at', 'DESC')->paginate(12);
 
      return view('posts.index', compact('posts'));
    }

    public function create()
    {
      return view('posts/create');
    }

   
  public function store(Request $request)
  {

    $data = $request->validate([
      'caption' => 'required',
      'image' => ['required', 'image'],
    ]);


      $filepath = request('image')->store('uploads', 'public');

      $image = Image::make(public_path("storage/{$filepath}"))->fit(1200, 1200);
      $image -> save();
      
      auth()->User()->posts()->create([
        'profile_id' =>auth()->user()->profile->id,
        'caption' => $data['caption'],
        'image' => $filepath,
      ]);

      return redirect('/profile/' . auth()->user()->id);
  }
  

}