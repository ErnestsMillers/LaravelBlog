@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Create New Post</div>

                <div class="panel-body">
					{!! Form::open(['route' => 'admin.posts.store']) !!}

		    			{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', null, array('class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255')) }}

		    			{{ Form::label('body', 'Post Body:') }}
		    			{{ Form::textarea('body', null, array('class'    => 'form-control')) }}

		    			{{ Form::label('category_id', 'Category:') }}
						<select name="category_id" class="form-control">
							
							@foreach ($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach

						</select>

						{{ Form::label('tags', 'Tags:') }}
						<select name="tags[]" class="form-control select2-multi" multiple="multiple">
							
							@foreach ($tags as $tag)
								<option value="{{ $tag->id }}">{{ $tag->title }}</option>
							@endforeach

						</select>
		    												  
		    			{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px')) }}

					{!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection