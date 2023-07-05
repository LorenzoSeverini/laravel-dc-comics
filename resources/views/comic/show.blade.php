@extends('layouts.app')
@section('page-title', 'Details')
@section('content')
<div class="container my-3">
    <h1>Comic</h1>
    {{-- link to edit comic  --}}
    <a href="{{ route('comic.edit', $comic->id) }}" class="btn btn-primary">Edit Comic</a>
    {{-- link to delete comic --}}
    <form action="{{ route('comic.destroy', $comic->id) }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Comic" data-comic-id="{{ $comic->id }}" id="deleteButton" class="btn btn-danger">
    </form>
    <div class="row g-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Comic: {{ $comic->title }}</h2>
                </div>
                <div class="card-body">
                    <h3>Series: {{ $comic->series }}</h3>
                    <h4>Price: {{ $comic->price }}</h4>
                    <h5>Type: {{ $comic->type }}</h5>
                    <p>Description: {{ $comic->description }}</p>
                </div>
                {{-- thumb --}}
                <div class="card-footer">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
            </div>
            <a href="{{ route('home')}}">go back to home Page</a>
        </div>
    </div>

</div>
@endsection
