	@include('errors._list')
	<div class="form-group">
		{!! Form::label('postTitle', 'Post Title:') !!}
		{!! Form::text('postTitle', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('postContent', 'Post Content:') !!}
		{!! Form::textarea('postContent', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit($buttonText, ['class'=>'form-control btn btn-primary']) !!}
	</div>