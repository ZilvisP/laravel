@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{$person->first_name}}  {{$person->last_name}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$person->id}}</div>
                <p>Personal code: {{$person->personal_code}}</p>
                <p>Email@: {{$person->email_address}}</p>
                <p>Phone number: {{$person->phone_number}}</p>
                <p>address id: {{$person->address_id}}</p>
                <p>user id: {{$person->user_id}}</p>

            </div>
            <div class="card-action">
                <x-forms.buttons.action :model="$person" mainRoute="persons" />
            </div>
        </div>
    </div>
</div>

@endsection
