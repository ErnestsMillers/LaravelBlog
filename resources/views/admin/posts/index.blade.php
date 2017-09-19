@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    <table class="table datatables">
                    	<thead>
                    		<th>ID</th>
                    		<th>Title</th>
                    		<th>Body</th>
                    		<th>Created At</th>
                    		<th>Updated At</th>
                    		<th>Actions</th>
                    	</thead>
                    	<tbody>
                    		@foreach($posts as $post)
								<tr>
									<td>{{ $post->id }}</td>
									<td>{{ $post->title }}</td>
									<td>{{ $post->body }}</td>
									<td>{{ $post->created_at }}</td>
									<td>{{ $post->updated_at }}</td>
									<td>
										<a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-default btn-sm btn-block">Show</a>
										<a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-default btn-sm btn-block">Edit</a>
									</td>
								</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

<script>
	$(document).ready(function(){
	    $('.datatables').DataTable();
	});
</script>
@endsection
