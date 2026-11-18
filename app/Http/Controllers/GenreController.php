<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read All
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil diambil',
            'data' => $genres
        ]);
    }

    // Create
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }

    // Read Detail
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data genre tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail genre berhasil diambil',
            'data' => $genre
        ]);
    }

    // Update
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data genre tidak ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $genre->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil diperbarui',
            'data' => $genre
        ]);
    }

    // Delete
   public function destroy(Genre $genre)
    {
    if ($genre->books()->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Genre tidak dapat dihapus karena masih digunakan oleh buku'
        ], 409);
    }

    $genre->delete();

    return response()->json([
        'success' => true,
        'message' => 'Data genre berhasil dihapus'
    ]);
    }
}
