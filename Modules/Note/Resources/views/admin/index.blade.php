@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('notes.create') }}"> Create Questions</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Вопрос</th>
                    <th scope="col">Ответ</th>

                </tr>
                </thead>
                <tbody>
                @foreach($notes as $note)
                <tr>
                    <th scope="row">{{ $note->id }}</th>
                    <td>{{ $note->questions }}</td>
                    <td>{{ $note->answer }}</td>
                    <td><a href="{{ route('notes.show',$note->id) }}" data-toggle="tooltip" data-original-title="Show" class="show btn btn-primary edit">
                            Show
                        </a><a href="{{ route('notes.edit',$note->id) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">
                            Edit
                        </a>
                        <form action="{{ route('notes.destroy',$note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="text" value="{{$note->id}}" name="id" hidden>
                            <button type="submit"  class="delete btn btn-danger" >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
