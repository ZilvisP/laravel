@extends('layouts.admin.main')
@section('content')
<div class="row">
    <div class="col s12"></div>
    <h2>Categories list</h2>
    <a href="{{route('categories.create')}}" class="btn btn-primary">Add new</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Image</th>
            <th>status_id</th>
            <th>parent_id</th>
            <th>sort_order</th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->image}}</td>
                <td>{{$category->status_id}}</td>
                <td>{{$category->parent_id}}</td>
                <td>{{$category->sort_order}}</td>
                <td>
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
