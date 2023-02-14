@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{$user->name}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$user->id}}</div>
                <p>User name: {{$user->name}}</p>
                <p>Email: {{$user->email}}</p>
                <p>Email verified: {{$user->email_verified_at}}</p>
                <p>User created at: {{$user->created_at}}</p>
            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$user" mainRoute="users" />
            </div>
        </div>
    </div>
</div>

@endsection
