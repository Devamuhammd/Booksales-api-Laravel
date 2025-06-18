<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $authors = Author::all();

            return response()->json([
                'success' => true,
                'message' => 'Data author berhasil diambil',
                'data' => $authors
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data author',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        try {
            $author = Author::create($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Author berhasil dibuat',
                'data' => $author
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat author',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $author = Author::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'Data author berhasil diambil',
                'data' => $author
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, $id)
    {
        try {
            $author = Author::findOrFail($id);
            $author->update($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Author berhasil diupdate',
                'data' => $author
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate author',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $author = Author::findOrFail($id);
            $author->delete();

            return response()->json([
                'success' => true,
                'message' => 'Author berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus author',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
