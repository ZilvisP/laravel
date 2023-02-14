@extends('layouts.admin.main')
@section('content')
    <h2>Adding new</h2>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"
               class="@error('name')is-invalid @enderror"><br>
        <input type="text" name="email" placeholder="Email" value="{{old('email')}}"
               class="@error('email')is-invalid @enderror"><br>
        <input type="text" name="password" placeholder="Password" value="{{old('password')}}"
               class="@error('password')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>

@endsection
