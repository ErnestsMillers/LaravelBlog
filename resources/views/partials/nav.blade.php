<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				@if (Auth::check())
					<li><a href="{{ route('admin.posts.index') }}">Posts Admin</a></li>
					<li><a href="#">Posts Guest</a></li>
					<li><a href="#">|</a></li>
					<li><a href="{{ route('admin.categories.index') }}">Categories Admin</a></li>
					<li><a href="#">Categories Guest</a></li>
					<li><a href="#">|</a></li>
					<li><a href="{{ route('admin.tags.index') }}">Tags Admin</a></li>
					<li><a href="#">Tags Guest</a></li>
					<li><a href="#">|</a></li>
					<li><a href="#">Comments Admin</a></li>
					<li><a href="#">|</a></li>
					<li><a href="#">Archive Guest</a></li>
					<li><a href="#">|</a></li>
					<li><a href="#">Search Guest</a></li>
				@else
					<li><a href="#">Home</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Tags</a></li>
					<li><a href="#">Archive</a></li>
					<li><a href="#">Search</a></li>
				@endif

			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>