@extends('layouts.master') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Website Overview</div>

                <div class="row text-center"  style="padding:20px">
                    <div class="col">
                        <div class="card" style="padding:10px">
                            <h2><span class="card-text fas fa-users" aria-hidden="true"></span> 203</h2>
                            <h4 class="card-title">Users</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="padding:10px">
                            <h2><span class="card-text fas fa-pencil-alt" aria-hidden="true"></span> 12</h2>
                            <h4 class="card-title">Pages</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="padding:10px">
                            <h2><span class="card-text fas fa-book" aria-hidden="true"></span> 33</h2>
                            <h4 class="card-title">Posts</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="padding:10px">
                            <h2><span class="card-text far fa-eye" aria-hidden="true"></span> 12,04</h2>
                            <h4 class="card-title">Visitors</h4>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
                
            </div>
            @endif
        </div>
    </div>
</div>
@endsection