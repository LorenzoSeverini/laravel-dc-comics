@extends('layouts.app')
@section('page-title', 'Create New Comic')
@section('content')

{{-- form to create a new comic  --}}
<div class="container my-3">
    <h1>Create new Comic</h1>

    {{-- validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{-- loop to show all the errors --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        <div>
    @endif

    {{-- link to go back to home page --}}
    <a href="{{ route('home')}}">go back to home Page</a>
    <div class="row g-3 py-4">
        <div class="col">
            <form action="{{ route('comic.store') }}" method="POST">
                @csrf
                @method('POST')

                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ old('title') }}" class="form-control" id="title" name="title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- thumb --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" value="{{ old('thumb') }}" class="form-control" id="thumb" name="thumb">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" value="{{ old('price') }}" class="form-control" id="price" name="price">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" value="{{ old('series') }}" class="form-control" id="series" name="series">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- sale date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" value="{{ old('sale_date') }}" class="form-control" id="sale_date" name="sale_date">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- artists --}}
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" value="{{ old('artists') }}" class="form-control" id="artists" name="artists">
                    @error('artists')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- writers --}}
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" value="{{ old('writers') }}" class="form-control" id="writers" name="writers">
                    @error('writers')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- submit --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
