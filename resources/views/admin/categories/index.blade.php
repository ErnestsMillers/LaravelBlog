@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left" style="line-height: 30px">Categories</div>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm pull-right">Create Category</a>
                </div>

                <div class="panel-body">
                    <table class="table datatables">
                    	<thead>
                    		<th>ID</th>
                    		<th>Name</th>
                    		<th>Description</th>
                            <th>Category</th>
                    		<th>Created At</th>
                    		<th>Updated At</th>
                    		<th>Actions</th>
                    	</thead>
                    	<tbody>
                    		@foreach($categories as $category)
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
									<td>{{ $category->category }}</td>
									<td>{{ $category->created_at }}</td>
									<td>{{ $category->updated_at }}</td>
									<td>
										<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-default btn-sm btn-block">Edit</a>
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
