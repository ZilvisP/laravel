@extends('layouts.admin.main')
@section('content')

<h2>Edit User</h2>
<form action="{{route('users.update', $user)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="name" value="{{old('name') ?? $user->name}}"
           class="@error('name')is-invalid @enderror"><br>
    <input type="text" name="email" placeholder="email" value="{{old('email') ?? $user->email}}"
           class="@error('email')is-invalid @enderror"><br>
    <input type="text" name="password" placeholder="password" value="{{old('password') ?? $user->password}}"
           class="@error('password')is-invalid @enderror"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>

@endsection
