@extends('layouts.admin.main')
@section('content')
<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{$address->country}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$address->id}}</div>
                <p>City: {{$address->city}}</p>
                <p>Street: {{$address->street}}</p>
                <p>Post code: {{$address->post_code}}</p>
            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$address" mainRoute="addresses" />
            </div>
        </div>
    </div>
</div>
@endsection
