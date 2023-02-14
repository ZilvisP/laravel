@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Products</h1>
            <a href="{{route('orders.create')}}" class="btn btn-primary">Create new</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>user_id</th>
                    <th>shipping_address_id</th>
                    <th>billing_address_id</th>
                    <th>status_id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->shipping_address_id}}</td>
                        <td>{{$order->billing_address_id}}</td>
                        <td>{{$order->status_id}}</td>
                        <td>
                            <x-forms.buttons.action :model="$order" mainRoute="orders" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
