<h2>Edit Person</h2>
<form action="{{route('persons.store')}}" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="First name" value=""><br>
    <input type="text" name="second_name" placeholder="Second name" value=""><br>
    <input type="text" name="personal_code" placeholder="Personal code" value=""><br>
    <input type="text" name="email_address" placeholder="email address" value=""><br>
    <input type="text" name="phone_number" placeholder="phone number" value=""><br>
    <input type="text" name="address_id" placeholder="address_id" value=""><br>
    <input type="text" name="user_id" placeholder="user_id" value=""><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Add new">
</form>

