@extends('layouts.app')

@section('content')

	<div class="card carddefault">

		<div class="card-header">Create category</div>


	<div class="card-body">
	<form action="{{route('categories.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="name"></label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<a class="btn btn-success text-white">Add Category</a>
			</div>
		</form>
	</div>
</div>
	
@endsection