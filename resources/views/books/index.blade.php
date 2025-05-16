<!-- resources/views/books/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                    <td>{{ $book->author->name ?? 'Unknown' }}</td>
                    <td>{{ $book->genre->name ?? 'Unknown' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
