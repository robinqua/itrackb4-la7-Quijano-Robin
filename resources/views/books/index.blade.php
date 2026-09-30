@extends('layouts.app')

@section('title', 'All Books')

@section('content')

    <a href="{{ route('books.create') }}" class="btn btn-success btn-sm">+ Add a Book</a>
    <br><br>

    <a href="{{ route('books.index') }}" class="btn btn-secondary btn-sm">Clear filters</a>
    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Publisher</th>
                <th>Rating</th>
                <th>Pages</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a>
                    </td>
                    <td>{{ $book['genre'] }}</td>
                    <td>{{ $book['publisher'] }}</td>
                    <td>{{ $book['rating'] }}/5</td>
                    <td>{{ $book['pages'] }}</td>
                    <td>{{ $book['year'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">There are no books to show right now</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection