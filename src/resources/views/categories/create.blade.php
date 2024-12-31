@extends('layouts.default')
@section('content')
    <div class="center-text">
        <h1>New Category</h1>
        <form action="{{route('categories.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="custom-input" placeholder="Enter category name">
            </div>
            <br>
            <div>
                <label for="name">Cover:</label>
                <input type="file" name="path_to_cover" id="path_to_cover" class="custom-input">
            </div>
            <br>
            <div>
                <button type="submit" class="custom-button">Save</button>
            </div>
        </form>
    </div>
@endsection
