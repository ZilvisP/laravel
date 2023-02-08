@extends('layouts.admin.main')
@section('content')

<h2>Edit Person</h2>
<form action="{{route('persons.update', $person)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="first_name" placeholder="First name" value="{{old('first_name') ?? $person->first_name}}"
           class="@error('first_name')is-invalid @enderror"><br>
    <input type="text" name="second_name" placeholder="Second name" value="{{old('second_name') ?? $person->second_name}}"
           class="@error('second_name')is-invalid @enderror"><br>
    <input type="text" name="personal_code" placeholder="Personal code" value="{{old('personal_code') ?? $person->personal_code}}"
           class="@error('personal_code')is-invalid @enderror"><br>
    <input type="text" name="email_address" placeholder="email_address" value="{{old('email_address') ?? $person->email_address}}"
           class="@error('email_address')is-invalid @enderror"><br>
    <input type="text" name="phone_number" placeholder="phone_number" value="{{old('phone_number') ?? $person->phone_number}}"
           class="@error('phone_number')is-invalid @enderror"><br>
    <input type="text" name="address_id" placeholder="address_id" value="{{old('address_id') ?? $person->address_id}}"
           class="@error('address_id')is-invalid @enderror"><br>
    <input type="text" name="user_id" placeholder="user_id" value="{{old('user_id') ?? $person->user_id}}"
           class="@error('user_id')is-invalid @enderror"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>

@endsection
