@extends('layout.master')
@section('content')
<div class="col-md-12">
	
	<article>
		<h3>{{ $post->postTitle }}</h3>
		<p>{{ $post->postContent }}</p>
	</article>
	<span class="label label-primary"><a style="color: #fff;"  href="{{ $post->id .'/edit' }}">Edit</a> </span>
	<span class="label label-danger"><a style="color: #fff;" href="{{ $post->id .'/delete' }}">Delete</a></span>

</div>
@stop()