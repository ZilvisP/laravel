@extends('layouts.admin.main')
@section('content')

    <h2>Edit Address</h2>
    <form action="{{route('addresses.update', $address)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="country" placeholder="Country" value="{{old('country') ?? $address->country}}"
               class="@error('country')is-invalid @enderror"><br>
        <input type="text" name="city" placeholder="City" value="{{old('city') ?? $address->city}}"
               class="@error('city')is-invalid @enderror"><br>
        <input type="text" name="street" placeholder="Street" value="{{old('street') ?? $address->street}}"
               class="@error('street')is-invalid @enderror"><br>
        <input type="text" name="post_code" placeholder="Post code" value="{{old('post_code') ?? $address->post_code}}"
               class="@error('post_code')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>

@endsection
