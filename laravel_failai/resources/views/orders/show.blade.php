@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200"> <br>
{{--                    <h2><span class="card-title" style="color: #c57f29">{{$order->name}}</span></h2>--}}
                </div>
                <div class="card-content">
                    <div>ID: {{$order->id}}</div>
                    <p>User: {{$order->user->name}}</p>
                    <p>Shipping Address: {{$order->shipping_address_id}}</p>
                    <p>Billing Address: {{$order->billing_address_id}}</p>
                    <p>Status: {{$order->status->name}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$order" mainRoute="orders" />
                </div>
            </div>
        </div>
    </div>
@endsection
