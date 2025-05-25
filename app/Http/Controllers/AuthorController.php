<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read all data
    public function index()
    {
         $authors = Author::all();
        return response()->json([
            'status' => 'success',
        'data' => $authors
        ]);
    }

    // Create data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author = Author::create([
            'name' => $request->name,
        ]);

        return response()->json($author, 201);
    }
}
