@extends('layouts.app')
@section('page-title', 'Title Override: Other Page')
@section('content')
<div class="container my-3">
    <h1>Other Page</h1>
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
