<?php

namespace App\Http\Controllers;
use App\Http\Requests\makePosts;
use App\Post;

class PostController extends Controller

{

	//Displaying all the posts

	public function index(){
		$posts = Post::latest()->paginate(5);
		return view('posts', compact('posts'));
	}

	//Displaying the form for creating a post.
	public function create()
	{
		return view('add_post_form');
	}

  //Saving the Post in the Database
  //makePosts is the form Request that were generate by artisan command. it is located
  //App\Http\Requests\makePosts;

	public function store(makePosts $request) {

		Post::create($request->all());

		return redirect('posts');

	}

   //Displaying a single post.

	public function show($id){
		$post = Post::findOrFail($id);
		return view('single', compact('post'));
	}



	//Displaying a a form with model binding for editing post.
	public function edit($id) {
		$post = Post::findOrFail($id);
		return view ('edit_post_form', compact('post'));   	
	}


   //Updating the Post
   //makePosts is the form Request that were generate by artisan command. it is located
   //App\Http\Requests\makePosts;
	public function update($id, MakePosts $request) {
		$post = Post::findOrFail($id);
		$post->update($request->all());
		return redirect('posts');

	}



}
