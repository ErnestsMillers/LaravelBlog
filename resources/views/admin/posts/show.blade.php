@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
					<p>{{ $post->body }}</p>

					
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