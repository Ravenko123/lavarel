<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store() {
        dump(request()->all());
        request()->validate([
            'content' => 'required|min:10|max:255'
        ]);
        Post::create([
            'content'=> request()->get('content', ''),
            'likes'=> 0,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'succcefflfucly vytvorene loalaoalll');
    }
    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('dashboard.index')->with('success', 'prispevok bol uspesne vymazany');


        
    }
    public function show(Post $post) {
        return view(
            'posts/show',
            [
                "post" => $post
            ]
       );       
    }
       public function edit(Post $post) {
        return view(
            'posts/edit',
            [
                "post" => $post
            ]
       );       
     }
     public function update(Post $post){

        request()->validate([
            'content' => 'required|min:10|max:255'
        ]);
        $post->update([
            'content'=> request()->get('content', ''),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'prispevok bol uspesne aktualizovany');

     }
}
