@extends('layouts.default')
@section('content')
    <div class="center-text">
        <h1>Welcome to the media control</h1>
        <h2>Please select your category, or create a <a href="{{route('categories.create')}}">new</a> !</h2>
        <h2>
            <a href="{{route('categories.index')}}">Categories</a>
        </h2>
        <div class="categories-container">
            @foreach($categories as $category)
                <div class="category-card">
                    <div class="image-container">
                        <img src="{{$category->path_to_cover}}" alt="">
                    </div>
                    <h2>{{$category->name}}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
