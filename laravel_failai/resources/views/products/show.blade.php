@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">

                    <img src="{{$product->image}}" alt=""><br>

                   <h2><span class="card-title" style="color: #c57f29">{{ $product->name }}</span></h2>
                </div>
                <div class="card-content">
                    <div>ID: {{$product->id}}</div>
                    <p>Slug: {{ $product->slug}}</p>
                    <p>Description: {{ $product->description }}</p>
                    <p>Image: {{ $product->image}}</p>
                    <p>Categories: {{ $product->category->name }}</p>
                    <p>Color: {{ $product->color}}</p>
                    <p>Size: {{ $product->size}}</p>
                    <p>Price: {{ $product->price}}</p>
                    <p>Status: {{ $product->status->name}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$product" mainRoute="products" />
                </div>
            </div>
        </div>
    </div>
@endsection
