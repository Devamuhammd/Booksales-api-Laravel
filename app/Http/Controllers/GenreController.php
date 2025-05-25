<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\GenreRequest;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $genres = Genre::all();
            
            return response()->json([
                'success' => true,
                'message' => 'Data genre berhasil diambil',
                'data' => $genres
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data genre',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenreRequest $request)
    {
        try {
            $genre = Genre::create($request->validated());
            
            return response()->json([
                'success' => true,
                'message' => 'Genre berhasil dibuat',
                'data' => $genre
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat genre',
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
            $genre = Genre::findOrFail($id);
            
            return response()->json([
                'success' => true,
                'message' => 'Data genre berhasil diambil',
                'data' => $genre
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreRequest $request, $id)
    {
        try {
            $genre = Genre::findOrFail($id);
            $genre->update($request->validated());
            
            return response()->json([
                'success' => true,
                'message' => 'Genre berhasil diupdate',
                'data' => $genre
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate genre',
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
            $genre = Genre::findOrFail($id);
            $genre->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Genre berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus genre',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}