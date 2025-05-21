<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        if (!$genres) {
            return response()->json([
            "success" => true,
            "message" => "resource data not found!",
            "data" => null
        ], 200);
        }
        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store($request) {
        //1. Validasi
        $validator = Validator::make(request()->all(), [
            "name" => "required|string",
            "description" => "required|string"
        ]);
        //2. cek data yang eror
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
             ], 422);
        }
        //3. simpan data
        $genre = Genre::create([
            "name" => $request->name,
            "description" => $request->description
        ]);
        //4. response berhasil
        return response()->json([
            "success" => true,
            "message" => "resource created seccessfully",
            "data" => $genre
        ], 201);
    }
}