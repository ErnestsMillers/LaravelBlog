@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Create New Tag</div>

                <div class="panel-body">
					{!! Form::open(['route' => 'admin.tags.store']) !!}

		    			{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', null, array('class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255')) }}

		    			{{ Form::submit('Create Tag', array('class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px')) }}

					{!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection