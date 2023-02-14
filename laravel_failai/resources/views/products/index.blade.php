@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Products</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">Create new</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category_id</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Status_id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->slug}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->category_id}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->status_id}}</td>
                        <td>
                            <x-forms.buttons.action :model="$product" mainRoute="products" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
