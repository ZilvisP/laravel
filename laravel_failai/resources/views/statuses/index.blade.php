@extends('layouts.admin.main')
@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Products</h1>
            <a href="{{route('statuses.create')}}" class="btn btn-primary">Create new</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statuses as $status)
                    <tr>
                        <td>{{$status->id}}</td>
                        <td>{{$status->name}}</td>
                        <td>{{$status->type}}</td>
                        <td>
                            <x-forms.buttons.action :model="$status" mainRoute="statuses" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
