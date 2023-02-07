<h2>Creating address</h2>
<form action="{{route('addresses.store')}}" method="post">
    @csrf
    <input type="text" name="country" placeholder="Country" value=""><br>
    <input type="text" name="city" placeholder="City" value=""><br>
    <input type="text" name="street" placeholder="Street" value=""><br>
    <input type="text" name="post_code" placeholder="Post code" value=""><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Add new">
</form>

