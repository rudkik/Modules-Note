@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @foreach($notes as $note)
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample{{$note->id}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">{{ $note->questions }}</a>
                </p>
                <div class="row" style="margin-top:{{$note->top}}px; margin-bottom:{{$note->bottom}}px ">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample{{$note->id}}">
                            <div class="card card-body">
                                {{ $note->answer }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
