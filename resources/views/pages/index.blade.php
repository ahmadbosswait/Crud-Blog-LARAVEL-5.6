@extends('layouts.app') 
@section('content')

<div class="container">
    <a href="/">All</a><br> @foreach($categories as $category)
    <a href="/cat/{{$category->id}}/">{{$category->title}}</a>
    <br> @endforeach
    <h1>Posts</h1>
    <hr>
    <div class="row">

        @if(count($posts) > 0) @foreach($posts as $post)

        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{$post->title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{$post->created_at}}</div>
                    <p class="card-text mb-auto">{{$post->body}}</p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                    style="width: 200px; height: 200px;" src="{{asset("/storage/cover_images/$post->cover_image")}}" data-holder-rendered="true">
            </div>
        </div>

        @endforeach {{-- {{$posts->links()}} --}} @else
        <p>No posts found</p>
        @endif
    </div>
@endsection