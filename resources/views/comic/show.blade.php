{{-- price and sale date --}}
@php
    $price = number_format($comic->price, 2, ',', '.');
    $priceWithEuro = $price . ' €';
    $saleDate = date('d/m/Y', strtotime($comic->sale_date));
@endphp
{{-- layout --}}
@extends('layouts.app')
@section('page-title', 'Details')
@section('content')
<div class="container my-3">
    <h1>Comic</h1>
    {{-- link to edit comic  --}}
    <a href="{{ route('comic.edit', $comic->id) }}" class="btn btn-primary">Edit Comic</a>
    {{-- link to delete comic --}}
    <form id="deleteForm" action="{{ route('comic.destroy', $comic->id) }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" id="deleteButton" class="btn btn-danger">Delete</button>
    </form>
    {{-- comci card --}}
    <div class="row g-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $comic->title }}</h2>
                </div>
                <div class="card-body">
                    <h3>Series: {{ $comic->series }}</h3>
                    <h4>Price: @php echo $priceWithEuro; @endphp</h4>
                    <h5>Type: {{ $comic->type }}</h5>
                    <p><strong>Description:</strong>: {{ $comic->description }}</p>
                    <p><strong>SaleDate:</strong> @php echo $saleDate; @endphp</p>
                    <p><strong>Artists:</strong> {{ $comic->artists }}</p>
                    <p><strong>Writers:</strong> {{ $comic->writers }}</p>
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
