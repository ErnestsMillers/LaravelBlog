@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Update This Tag</div>

                <div class="panel-body">

					<!-- UPDATE -->

					{!! Form::open(['route' => ['admin.tags.update', $tag->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'PUT') }}

		    			{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', $tag->title, ['class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255']) }}

		    			{{ Form::submit('Update Tag', ['class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px']) }}
					{!! Form::close() !!}

					<!-- DELETE -->

					{!! Form::open(['route' => ['admin.tags.destroy', $tag->id], 'method' => 'POST']) !!}
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