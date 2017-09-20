@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Update This Post</div>

                <div class="panel-body">

					<!-- UPDATE -->

					{!! Form::open(['route' => ['admin.posts.update', $post->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'PUT') }}

		    			{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', $post->title, ['class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255']) }}

		    			{{ Form::label('body', 'Post Body:') }}
		    			{{ Form::textarea('body', $post->body, ['class'    => 'form-control']) }}
		    												  
		    			{{ Form::submit('Update Post', ['class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px']) }}
					{!! Form::close() !!}

					<!-- DELETE -->

					{!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete Post', ['class' => 'btn btn-danger btn-lg btn-block',
														'style' => 'margin-top: 20px']) }}
					{!! Form::close() !!}
                </div>
            </div>
		</div>
	</div>
</div>
@endsection