
@extends('layouts.admin.main')
@section('content')
    <h1>Creating Status</h1>
    <form action="{{route('statuses.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{old('name')}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="type" placeholder="type" value="{{old('type')}}"
               class="@error('type')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add">
    </form>
@endsection
