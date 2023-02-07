<h2>Edit Person</h2>
<form action="{{route('persons.update', $person)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="first_name" placeholder="First name" value="{{$person->first_name}}"><br>
    <input type="text" name="second_name" placeholder="Second name" value="{{$person->second_name}}"><br>
    <input type="text" name="personal_code" placeholder="Personal code" value="{{$person->personal_code}}"><br>
    <input type="text" name="email_address" placeholder="email address" value="{{$person->email_address}}"><br>
    <input type="text" name="phone_number" placeholder="phone number" value="{{$person->phone_number}}"><br>
    <input type="text" name="address_id" placeholder="address_id" value="{{$person->address_id}}"><br>
    <input type="text" name="user_id" placeholder="user_id" value="{{$person->user_id}}"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>

