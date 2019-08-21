@extends('layouts.app')

@section('content')

	<div class="card carddefault">

		<div class="card-header">Create category</div>


	<div class="card-body">
		@if($errors->any())
		<div class="alert alert-danger">
			<ul class="list-group">
				@foreach($errors->all() as  $error)
			<li class="list-group-item text-danger">
				{{$error}}
			</li>
				@endforeach
			</ul>
		</div>
		@endif
	<form action="{{route('categories.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="name"></label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<button class="btn btn-success text-white">Add Category</button>
			</div>
		</form>
	</div>
</div>
	
@endsection