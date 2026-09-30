@extends('layouts.app')

@section('title', 'Add a Book')

@section('content')

    <h2>Add a Book</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select name="genre" id="genre"
                    class="form-select @error('genre') is-invalid @enderror">
                <option value="" disabled {{ old('genre') ? '' : 'selected' }}>Choose a genre</option>
                @foreach (['Programming', 'Fiction', 'Non-Fiction', 'Biography', 'Science'] as $g)
                    <option value="{{ $g }}" {{ old('genre') === $g ? 'selected' : '' }}>
                        {{ $g }}
                    </option>
                @endforeach
            </select>
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" name="publisher" id="publisher"
                   class="form-control @error('publisher') is-invalid @enderror"
                   value="{{ old('publisher') }}">
            @error('publisher')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="3"
                      class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1–5)</label>
            <input type="number" name="rating" id="rating" min="1" max="5"
                   class="form-control @error('rating') is-invalid @enderror"
                   value="{{ old('rating') }}">
            @error('rating')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="number" name="pages" id="pages"
                   class="form-control @error('pages') is-invalid @enderror"
                   value="{{ old('pages') }}">
            @error('pages')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year"
                   class="form-control @error('year') is-invalid @enderror"
                   value="{{ old('year') }}">
            @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection