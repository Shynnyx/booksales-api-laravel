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
}
