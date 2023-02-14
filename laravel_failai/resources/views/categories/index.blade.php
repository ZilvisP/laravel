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
                    <x-forms.buttons.action :model="$category" mainRoute="categories" />
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
