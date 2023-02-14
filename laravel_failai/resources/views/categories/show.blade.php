@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="{{$category->image}}" alt=""><br>
                <h2><span class="card-title" style="color: #c57f29">{{$category->name}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$category->id}}</div>
                <p>Category slug: {{$category->slug}}</p>
                <p>Description: {{$category->description}}</p>
                <p>Image: {{$category->image}}</p>
                <p>Status: {{$category->status->name }}</p>
                <p>parent id: {{$category->parent_id}}</p>
                <p>sort order: {{$category->sort_order}}</p>

            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$category" mainRoute="categories" />
            </div>
        </div>
    </div>
</div>

@endsection
