@extends('layouts.admin.main')
@section('content')

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200"> <br>
                <h2><span class="card-title" style="color: #c57f29">{{$category->name}}</span></h2>
            </div>
            <div class="card-content">
                <div>ID: {{$category->id}}</div>
                <p>Category slug: {{$category->slug}}</p>
                <p>Description: {{$category->description}}</p>
                <p>Image: {{$category->image}}</p>
                <p>status id: {{$category->status_id}}</p>
                <p>parent id: {{$category->parent_id}}</p>
                <p>sort order: {{$category->sort_order}}</p>

            </div>
            <div class="card-action">
                <a href="{{ route('categories.edit', $category->id) }}"
                   data-tooltip="Edit"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">Edit</i>
                </a>
                <a href="{{ route('categories.index') }}"
                   data-tooltip="Back to persons"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">Back</i>
                </a>

                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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

@endsection
