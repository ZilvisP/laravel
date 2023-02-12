@extends('layouts.admin.main')
@section('content')
    <h2>Adding new</h2>
    <form action="{{route('persons.store')}}" method="post">
        @csrf
        <input type="text" name="first_name" placeholder="First name" value="{{old('first_name')}}"
               class="@error('first_name')is-invalid @enderror"><br>
        <input type="text" name="last_name" placeholder="Last name" value="{{old('last_name')}}"
               class="@error('last_name')is-invalid @enderror"><br>
        <input type="text" name="personal_code" placeholder="Personal code" value="{{old('personal_code')}}"
               class="@error('personal_code')is-invalid @enderror"><br>
        <input type="text" name="email_address" placeholder="email address" value="{{old('email_address')}}"
               class="@error('email_address')is-invalid @enderror"><br>
        <input type="text" name="phone_number" placeholder="phone number" value="{{old('phone_number')}}"
               class="@error('phone_number')is-invalid @enderror"><br>
        <input type="text" name="address_id" placeholder="address_id" value="{{old('address_id')}}"
               class="@error('address_id')is-invalid @enderror"><br>
        <input type="text" name="user_id" placeholder="user_id" value="{{old('user_id')}}"
               class="@error('user_id')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>

@endsection
