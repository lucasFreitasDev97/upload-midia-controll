@extends('layouts.default')
@section('content')
    <div class="center-text">
        <h1>Welcome to the media control</h1>
        <h2>Please select your category, or create a <a href="{{route('categories.create')}}">new</a> !</h2>
        <div class="categories-container">
            @foreach($categories as $category)
                <div class="category-card">
                    <div class="image-container">
                        <img src="{{$category->path_to_cover}}" alt="">
                        <div class="category-name">{{$category->name}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
