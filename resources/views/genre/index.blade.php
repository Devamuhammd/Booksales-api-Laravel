@extends('layouts.app')

@section('title', 'Daftar Genre')

@section('content')
    <h1 class="mb-4">Daftar Genre</h1>
    <div class="list-group">
        @foreach ($genres as $genre)
            <div class="list-group-item">
                {{ $genre->name }}
            </div>
        @endforeach
    </div>
@endsection
