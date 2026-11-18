<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read All
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil diambil',
            'data' => $authors
        ]);
    }

    // Create
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string',
            'bio' => 'nullable|string'
        ]);

        $author = Author::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil ditambahkan',
            'data' => $author
        ], 201);
    }

    // Read Detail
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data author tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail author berhasil diambil',
            'data' => $author
        ]);
    }

    // Update
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data author tidak ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string',
            'bio' => 'nullable|string'
        ]);

        $author->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil diperbarui',
            'data' => $author
        ]);
    }

    // Delete
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data author tidak ditemukan'
            ], 404);
        }

        if ($author->books()->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak dapat dihapus karena masih memiliki buku'
            ], 409);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil dihapus'
        ]);
    }
}
