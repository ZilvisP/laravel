<div class="row">
    <div class="col s12"></div>
    <h2>Person list</h2>
    <a href="{{route('persons.create')}}" class="btn btn-primary">Add new</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Second name</th>
            <th>Personal code</th>
            <th>Email@ address</th>
            <th>Phone number</th>
            <th>address_id</th>
            <th>user_id</th>

        </tr>
        </thead>
        <tbody>
        @foreach($personos as $person)
            <tr>
                <td>{{$person->id}}</td>
                <td>{{$person->first_name}}</td>
                <td>{{$person->second_name}}</td>
                <td>{{$person->personal_code}}</td>
                <td>{{$person->email_address}}</td>
                <td>{{$person->phone_number}}</td>
                <td>{{$person->address_id}}</td>
                <td>{{$person->user_id}}</td>
                <td>
                    <a href="{{route('persons.edit', $person->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('persons.destroy', $person->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
