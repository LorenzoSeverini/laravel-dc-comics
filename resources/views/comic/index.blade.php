@extends('layouts.app')
@section('content')
<div class="container my-3">
    <h1>Dc Comics List:</h1>
    {{-- link to create a new comic --}}
    <a href="{{ route('comic.create') }}" class="btn btn-primary">Create new Comic</a>
    {{-- list of comics --}}
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($comics as $comic)
            <div class="card m-3">
                <img  class="card-img-top img-thumbnail" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $comic->title }}</h2>
                </div>
                <div class="card-footer">
                    <a href="{{ route('comic.show', $comic->id )}}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
