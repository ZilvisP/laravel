@extends('home')
@section('products')

    <h2>Products</h2>
    <div class="product selection">
        <div class="grid-container">
            @foreach($products as $product)
                <div class="grid-item">
                    <div class="product-image">
                        <img src="{{$product->image}}" alt="">
                    </div>
                    <p>Product name: {{ $product->name }}</p>
                    <p>Product price: {{ $product->price }}</p>
                    <p>Product description: {{ $product->description }}</p>
                    <p>Product category: {{ $product->category->name }}</p>
                    @include('components.forms.add-to-cart-form')
                </div>
            @endforeach
        </div>
    </div>

@endsection

{{--@extends('home')--}}
{{--@section('products')--}}

{{--    <h2>Products</h2>--}}
{{--    <div class="product selection">--}}
{{--        <table class="table">--}}
{{--            @foreach($products as $product)--}}
{{--                @foreach($products->chunk(4) as $productChunk)--}}
{{--                    <tr>--}}
{{--                        @foreach($productChunk as $product)--}}
{{--                            <td>--}}
{{--                                <p>Product name: {{ $product->name }}</p>--}}
{{--                                <p>Product price: {{ $product->price }}</p>--}}
{{--                                <p>Product description: {{ $product->description }}</p>--}}
{{--                                <p>Product category: {{ $product->category->name }}</p>--}}
{{--                                @include('components.forms.add-to-cart-form')--}}
{{--                            </td>--}}
{{--                        @endforeach--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--        </table>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--@endsection--}}

