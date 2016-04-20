@extends('layout.master')
@section('content')
<div class="col-md-12">
	<h3>Add a post</h3>
	

	{!! Form::open(array('url'=>'posts')) !!}

		@include('layout.partials._post_form', ['buttonText' => 'Add Post'])

	{!! Form::close() !!}


</div>


@stop()