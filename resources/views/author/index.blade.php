@extends('layouts.app')

@section('content')
    <h1>Daftar Author</h1>
    @if($authors->count())
        <ul>
        @foreach ($authors as $author)
            <li>{{ $author->name }}</li>
        @endforeach
        </ul>
    @else
        <p>Tidak ada data author.</p>
    @endif
@endsection