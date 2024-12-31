@extends('layouts.default')
@section('content')
    <div class="center-text">
        <h1>Categories</h1>
        <div class="table-container">
            <table border="1" class="center-text">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('categories.edit', ['category' => $category])}}">Edit</a>
                            |
                            <a href="{{route('categories.destroy', ['category' => $category])}}">Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table {
        margin: 0 auto; /* Centraliza horizontalmente */
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }
</style>
