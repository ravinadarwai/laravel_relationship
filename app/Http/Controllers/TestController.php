<?php

namespace App\Http\Controllers;
use App\Models\{
    User,Contacts,post,categories
};

use Illuminate\Http\Request;

class TestController extends Controller
{
public function index(){
//one to one
 // $user=User::with('contact')->first();
    // dd $user->toarray();

    //one to many

    // $user=User::with('contact','post')->find(1);
    // dd($user->toarray());

// $post=Post::with('user')->first();
// dd($post->toArray());

    //many to many


// $categories= categories::all();
// $post=Post::with('categories')->first();


//attach are used in attach data detach  combination hata dega and sycn 1 2 id sath me pass kar sakta ha baki data delete ho jayga

// $post->categories()->attach($categories);
// $post->categories()->sync([1,2]);
// $post->categories()->detach([1,2]);


// dd($post->toarray());


    
        $posts = Post::with('categories')->get();

        return view('index', compact('posts'));
    
}



}
