<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $genre = new Genre();
        $genre->name = $request->input('name');
        $genre->save();
        return redirect()->route('genres.index')->with('success', 'Genre has been saved');
    }

    public function show(Genre $genre)
    {
        //
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->only('name'));
        return redirect()->route('genres.index')->with('success', 'Genre has been updated');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index')->with('success', 'Genre has been deleted');
    }
}
