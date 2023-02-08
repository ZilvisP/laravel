@extends('layouts.admin.main')
@section('content')
    <h2>Creating address</h2>
    <form action="{{route('addresses.store')}}" method="post">
        @csrf
        <input type="text" name="country" placeholder="Country" value="{{old('country')}}"
               class="@error('country')is-invalid @enderror"><br>
        <input type="text" name="city" placeholder="City" value="{{old('city')}}"
               class="@error('city')is-invalid @enderror"><br>
        <input type="text" name="street" placeholder="Street" value="{{old('street')}}"
               class="@error('street')is-invalid @enderror"><br>
        <input type="text" name="post_code" placeholder="Post code" value="{{old('post_code')}}"
               class="@error('post_code')is-invalid @enderror"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Add new">
    </form>
@endsection

