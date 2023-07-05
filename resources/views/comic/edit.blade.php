@extends('layouts.app')
@section('page-title', 'Edit Comic')
@section('content')

<div class="container my-3">
    <h1>Edit Comic</h1>
    {{-- link home page --}}
    <a href="{{ route('comic.index') }}" class="btn btn-primary">Back to Comics List</a>
    {{-- edit form --}}
    <div class="row g-3 py-4">
        <div class="col">
            <form action="{{ route('comic.update', $comic->id) }}" method="POST">
                @csrf
                @method('PATCH')
                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ old('title', $comic->title) }}" class="form-control" id="title" name="title">
                </div>
                {{-- description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="30" rows="5">{{ old('description', $comic->description) }}</textarea>
                </div>
                {{-- thumb --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" value="{{ old('thumb', $comic->thumb) }}" class="form-control" id="thumb" name="thumb">
                </div>
                {{-- price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" value="{{ old('price', $comic->price) }}" class="form-control" id="price" name="price">
                </div>
                {{-- series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" value="{{ old('series', $comic->series) }}" class="form-control" id="series" name="series">
                </div>
                {{-- sale date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" value="{{ old('sale_date', $comic->sale_date) }}" class="form-control" id="sale_date" name="sale_date">
                </div>
                {{-- type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type ">
                        <option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }}>comic book</option>
                        <option value="graphic novel" {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }}>graphic novel</option>
                    </select>
                </div>
                {{-- artists --}}
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" value="{{ old('artists', $comic->artists) }}" class="form-control" id="artists" name="artists">
                </div>
                {{-- writers --}}
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" value="{{ old('writers', $comic->writers) }}" class="form-control" id="writers" name="writers">
                </div>
                {{-- edit button --}}
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
