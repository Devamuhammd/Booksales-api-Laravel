<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Ambil semua buku sekaligus relasi author
       $books = Book::all();
    return response()->json([
        'status' => 'success',
        'data' => $books
    ]);
    }
}

