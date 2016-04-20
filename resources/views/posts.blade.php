@extends('layout.master')

@section('content')
<div class="col-md-12">
	
<article>
	@foreach($posts as $post)

		<h3><a href="posts/{{$post->id}}"> {{ $post->postTitle }} </a></h3>
		<p>{{ $post->postContent }}</p>
		<span class="label label-primary"><a style="color: #fff;"  href="{{ 'posts/'. $post->id .'/edit' }}">Edit</a> </span>
		<span class="label label-danger"><a style="color: #fff;" href="{{ 'posts/'. $post->id .'/delete' }}">Delete</a></span>

	@endforeach()
</article>

	<center>{!! $posts->links() !!}</center>

</div>
@stop()