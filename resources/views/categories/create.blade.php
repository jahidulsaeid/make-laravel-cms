@extends('layouts.app')

@section('content')

<div class="card carddefault">

	<div class="card-header">
		{{isset($category) ? 'Edit Category' : 'Create category'}}
	</div>


	<div class="card-body">
		@if($errors->any())
		<div class="alert alert-danger">
			<ul class="list-group">
				@foreach($errors->all() as $error)
				<li class="list-group-item text-danger">
					{{$error}}
				</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form action="{{isset($category) ? route('categories.update', $category->id): route('categories.store')}}"
			method="POST">
			@csrf

			@if (isset($category))
			@method('PUT')
			@endif
			<div class="form-group">
				<label for="name"></label>
				<input type="text" class="form-control" name="name" value="{{isset($category)?$category->name : ''}}">
			</div>
			<div class="form-group">
				<button class="btn btn-success text-white">
					{{isset($category) ? 'Update Category': 'Add Category'}}
				</button>
			</div>
		</form>
	</div>
</div>

@endsection