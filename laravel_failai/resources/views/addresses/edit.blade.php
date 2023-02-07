<h2>Edit Address</h2>
<form action="{{route('addresses.update', $address)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="country" placeholder="Country" value="{{$address->country}}"><br>
    <input type="text" name="city" placeholder="City" value="{{$address->city}}"><br>
    <input type="text" name="street" placeholder="Street" value="{{$address->street}}"><br>
    <input type="text" name="post_code" placeholder="Post code" value="{{$address->post_code}}"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>

