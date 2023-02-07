<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{"$person->first_name  $person->second_name"}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$person->id}}</div>
                <p>Personal code: {{$person->personal_code}}</p>
                <p>Email@: {{$person->email_address}}</p>
                <p>Phone number: {{$person->phone_number}}</p>
                <p>address id: {{$person->address_id}}</p>
                <p>user id: {{$person->user_id}}</p>

            </div>
            <div class="card-action">
                <a href="{{ route('persons.edit', $person->id) }}"
                   data-tooltip="Edit"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <a href="{{ route('persons.index') }}"
                   data-tooltip="Back to persons"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">Back</i>
                </a>

                <form action="{{ route('persons.destroy', $person->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"data-tooltip="destroy"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
