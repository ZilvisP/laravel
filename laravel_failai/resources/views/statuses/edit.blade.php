
@extends('layouts.admin.main')
@section('content')
    <h1>Editing Status</h1>
    <form action="{{route('statuses.store', $status)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="name" value="{{old('name') ?? $status->name}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="type" placeholder="type" value="{{old('type') ?? $status->type}}"
               class="@error('type')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
