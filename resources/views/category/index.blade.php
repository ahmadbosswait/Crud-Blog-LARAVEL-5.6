@extends('layouts.master') 
@section('content')


<div class="box">
    <div class="box-header with-border">
        <h3>All Categories</h3>
        {{-- Button trigger modal --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                    Add new
                </button><br><br>
    </div>

    <div class="box-body">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Modify</th>
                </tr>
            </thead>

            <tbody>

                @if(count($categories) > 0) @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-mytitle="{{$category->title}}" data-mydescription="{{$category->description}}"
                            data-catid={{$category->id}} data-target="#EditModal">Edit</button> /
                        <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal" data-catid={{$category->id}}>Delete</button></td>
                </tr>
                @endforeach @else
                <p class="text-center">No Category found</p>
                @endif
            </tbody>
        </table>

    </div>
    <div class="box-footer clear-fix">

        {{$categories->links()}}
    </div>
</div>


{{-- Modal for Add New Category --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.store')}}" method="POST">
                    {{csrf_field()}}
    @include('category.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal for Edit Category --}}
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.update','test')}}" method="POST">
                    {{method_field('patch')}} {{csrf_field()}}
                    <input type="hidden" name="category_id" id="cat_id" value="">
    @include('category.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal for Delete Category --}}
<div class="modal fade modal-danger" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('category.destroy','test')}}" method="POST">
                {{method_field('delete')}} {{csrf_field()}}
                <div class="modal-body">
                    <p class="text-cenetr">
                        Do you want to delete category ?
                    </p>
                    <input type="hidden" name="category_id" id="cat_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-warning">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection