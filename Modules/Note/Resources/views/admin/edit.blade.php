@extends('layouts.app')

@section('content')
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Company</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('notes.index') }}" enctype="multipart/form-data"> Back</a>
                    </div>
                </div>
            </div>
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#content" role="tab" aria-controls="home" aria-selected="true">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#design" role="tab" aria-controls="profile" aria-selected="false">Design</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <form action="{{ route('notes.update', $note->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <strong>Questions:</strong>
                            <input type="text" name="questions" class="form-control" placeholder="Questions" value="{{ $note->questions }}">
                            <strong>Answer:</strong>
                            <input type="text" name="answer" class="form-control" placeholder="Answer" value="{{ $note->answer }}">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <strong>Top:</strong>
                            <input type="number" name="top" class="form-control" placeholder="Top" value="{{ $note->top }}">
                            <strong>Bottom:</strong>
                            <input type="number" name="bottom" class="form-control" placeholder="Bottom" value="{{ $note->bottom }}">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </form>
            </div>
        </div>
    </body>
@endsection

