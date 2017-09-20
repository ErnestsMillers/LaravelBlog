@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Create New Category</div>
                
                <div class="panel-body">
					{!! Form::open(['route' => 'admin.categories.store']) !!}

		    			{{ Form::label('name', 'Title:') }}
						{{ Form::text('name', null, array('class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255')) }}

		    			{{ Form::label('description', 'Description:') }}
		    			{{ Form::text('description', null, array('class'    => 'form-control')) }}
		    												  
		    			{{ Form::submit('Create Category', array('class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px')) }}

					{!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection