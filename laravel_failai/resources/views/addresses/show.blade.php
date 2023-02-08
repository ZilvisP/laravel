@extends('layouts.admin.main')
@section('content')
<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{$address->country}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$address->id}}</div>
                <p>City: {{$address->city}}</p>
                <p>Street: {{$address->street}}</p>
                <p>Post code: {{$address->post_code}}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('addresses.edit', $address->id) }}"
                   data-tooltip="Edit"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <a href="{{ route('addresses.index') }}"
                   data-tooltip="Grįžti į pradinį"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">Back</i>
                </a>

                <form action="{{ route('addresses.destroy', $address->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" data-tooltip="destroy"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
