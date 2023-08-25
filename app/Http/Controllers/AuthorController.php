<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    public function show($id)
    {
        $author = Author::find($id);
        return response()->json($author);
    }

    public function store(Request $request)
    {
        $author = new Author([
            'AuthorName' => $request->input('AuthorName')
        ]);
        $author->save();
        return response()->json(['message' => 'Author created successfully', 'author' => $author]);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->AuthorName = $request->input('AuthorName');
        $author->save();
        return response()->json(['message' => 'Author updated successfully', 'author' => $author]);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
