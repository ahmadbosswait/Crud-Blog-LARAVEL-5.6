@extends('layouts.master') 
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3>All Posts</h3>
        {{-- Button trigger modal --}}
        <a type="button" href="posts/create" class="btn btn-primary">
                    Add new post
        </a><br><br>
    </div>

    <div class="box-body">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Image</th>
                    <th>Modify</th>
                </tr>
            </thead>

            <tbody>
                @if(count($posts) > 0) @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                    <img src="{{asset("/storage/cover_images/$post->cover_image")}}" class="rounded mx-auto d-block" alt="" width="40" height="40">
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Edit</button> &nbsp;&nbsp;
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach @else
                <p class="text-center">No Category found</p>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection