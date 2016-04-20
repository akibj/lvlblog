@extends('layout.master')
@section('content')
<div class="col-md-12">
	

	{!! Form::model($post, array('method'=>'PATCH', 'action'=> array('PostController@update', $post->id))) !!}

		@include('layout.partials._post_form', ['buttonText' => 'Update Post'])

	{!! Form::close() !!}


</div>


@stop()