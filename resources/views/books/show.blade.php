@extends('layouts.app')

@section('title', $book['title'])

@section('content')
    <div class="card" style="max-width: 28rem;">
        <div class="card-body">
            <h2 class="card-title">{{ $book['title'] }}</h2>
            <p class="card-text"><strong>Genre:</strong> {{ $book['genre'] }}</p>
            <p class="card-text"><strong>Publisher:</strong> {{ $book['publisher'] }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $book['description'] }}</p>
            <p class="card-text"><strong>Rating:</strong> {{ $book['rating'] }}/5</p>
            <p class="card-text"><strong>Pages:</strong> {{ $book['pages'] }}</p>
            <p class="card-text"><strong>Year:</strong> {{ $book['year'] }}</p>

            <a href="{{ route('books.index') }}" class="btn btn-primary">&larr; Back to all books</a>
        </div>
    </div>
@endsection