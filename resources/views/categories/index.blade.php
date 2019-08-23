@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
</div>
<div class="card carddefault">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td class="float-right">
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm">
                            Edit
                        </a>
                        <button class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})">Delete</button>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>




        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="" method="POST" id="deleteCategoryForm">
                    @method('DELETE')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="font-weight-bold text-center">Are your sure you want to delete this category?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>







    </div>
</div>
@endsection
<script>
    function handleDelete(id)
    {
        var form = document.getElementById('deleteCategoryForm')

        form.action = '/categories/' + id
        console.log('Deleting',form);

        $('#deleteModal').modal('show')
        
    }


</script>

@section('scripts')

@endsection