@extends('layouts.admin.main')
@section('content')

<h2>Edit Category</h2>
<form action="{{route('categories.update', $category)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="category name" value="{{old('name') ?? $category->name}}"
           class="@error('name')is-invalid @enderror"><br>
    <input type="text" name="slug" placeholder="category slug" value="{{old('slug') ?? $category->slug}}"
           class="@error('slug')is-invalid @enderror"><br>
    <input type="text" name="description" placeholder="description" value="{{old('description') ?? $category->description}}"
           class="@error('description')is-invalid @enderror"><br>

    <input type="file" name="image" placeholder="image" value="{{old('file') ?? $category->image}}"
           {{--        <input type="file" name="foto">--}}
           class="@error('image')is-invalid @enderror"><br>

    <input type="text" name="status_id" placeholder="status id" value="{{old('status_id') ?? $category->status_id}}"
           class="@error('status_id')is-invalid @enderror"><br>

    <input type="text" name="parent_id" placeholder="parent id" value="{{old('parent_id') ?? $category->parent_id}}"
           class="@error('parent_id')is-invalid @enderror"><br>
    <input type="text" name="sort_order" placeholder="sort order" value="{{old('sort_order') ?? $category->sort_order}}"
           class="@error('sort_order')is-invalid @enderror"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>

@endsection
