@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12"></div>
        <h1>Addresses</h1>
        <a href="{{route('addresses.create')}}" class="btn btn-primary">Add new</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>City</th>
                <th>Street</th>
                <th>Post code</th>
            </tr>
            </thead>
            <tbody>
            @foreach($adresai as $address)
                <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->country}}</td>
                    <td>{{$address->city}}</td>
                    <td>{{$address->street}}</td>
                    <td>{{$address->post_code}}</td>
                    <td>
                        <x-forms.buttons.action :model="$address" mainRoute="addresses" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
