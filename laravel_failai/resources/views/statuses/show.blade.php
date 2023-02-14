@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200"> <br>
                    <h2><span class="card-title" style="color: #c57f29">{{$status->name}}</span></h2>
                </div>
                <div class="card-content">
                    <div>ID: {{$status->id}}</div>

                    <p>Status type: {{$status->type}}</p>

                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$status" mainRoute="statuses" />
                </div>
            </div>
        </div>
    </div>
@endsection
