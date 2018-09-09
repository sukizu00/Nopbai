<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $allPosts = Post::all();
        return view('list')->with('allPosts', $allPosts);
    }

    public function show($id){
        $post = \App\Post::findorFail($id);

        $this->authorize($post, 'view');

        return view ('list', compact('post'));
    }

    public function create() {
        return view('create_post');
    }

    public function store(Request $request) {
        $obj = new Post();
        $obj->title = $request->get('title');
        $obj->body = $request->get('body');
        $obj->user_id = 2;
        $obj->save();
        return view('list');
    }
    public function destroy($id) {
        $post = \App\Post::finorFail($id);

        $this->authorize($post, 'delete');

        return view ('list');
    }
}
