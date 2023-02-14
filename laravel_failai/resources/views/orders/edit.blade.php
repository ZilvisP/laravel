
@extends('layouts.admin.main')
@section('content')
    <h1>Editing Order</h1>
    <form action="{{route('orders.update', $order)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="user_id" placeholder="user id" value="{{old('user_id') ?? $order->user_id}}"
               class="@error('user_id')is-invalid @enderror"><br>
        <input type="text" name="shipping_address_id" placeholder="shipping_address_id" value="{{old('shipping_address_id') ?? $order->shipping_address_id}}"
               class="@error('shipping_address_id')is-invalid @enderror"><br>
        <input type="text" name="billing_address_id" placeholder="billing_address_id" value="{{old('billing_address_id') ?? $order->billing_address_id}}"
               class="@error('billing_address_id')is-invalid @enderror"><br>
        <input type="text" name="status_id" placeholder="status_id" value="{{old('status_id') ?? $order->status_id}}"
               class="@error('status_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
