@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading">Update This Category</div>
                
                <div class="panel-body">

                	{{ $category->posts->title }}

					<!-- UPDATE -->

					{!! Form::open(['route' => ['admin.categories.update', $category->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'PUT') }}

		    			{{ Form::label('name', 'Name:') }}
						{{ Form::text('name', $category->name, ['class'     => 'form-control', 
														   'required'  => '', 
														   'maxlength' => '255']) }}

		    			{{ Form::label('description', 'Description:') }}
		    			{{ Form::textarea('description', $category->description, ['class'    => 'form-control']) }}
		    												  
		    			{{ Form::submit('Update Category', ['class' => 'btn btn-success btn-lg btn-block', 
		    												 'style' => 'margin-top: 20px']) }}
					{!! Form::close() !!}

					<!-- DELETE -->

					{!! Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete Category', ['class' => 'btn btn-danger btn-lg btn-block',
														'style' => 'margin-top: 20px']) }}
					{!! Form::close() !!}
                </div>
            </div>
		</div>
	</div>
</div>
@endsection