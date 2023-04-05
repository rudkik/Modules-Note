@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <strong>Questions:</strong>
                    <input type="text" name="name" value="{{ $note->questions }}" class="form-control" placeholder="Company name" disabled>
                    <strong>Answer:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Company Email" value="{{ $note->answer }}" disabled>
                </div>
            </div>
        </div>
    </body>
@endsection


