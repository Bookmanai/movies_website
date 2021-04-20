<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Producer;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();
        return view('movies.index', compact(['movies', 'tags', 'genres', 'producers', 'actors']));
    }

    public function movie_by_tag(Tag $tag){

        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        $movies = Movie::where('tag_id', $tag->id)->get();
        return view('movies.index', compact(['movies', 'tags', 'genres', 'producers', 'actors']));
    }

    public function movie_by_prod(Producer $producer){

        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        $movies = Movie::where('producer_id', $producer->id)->get();
        return view('movies.index', compact(['movies', 'tags', 'genres', 'producers', 'actors']));
    }

    public function create()
    {
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        return view('movies.create', compact(['tags', 'genres', 'producers', 'actors']));
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->release_date = $request->input('release_date');
        $movie->runtime = $request->input('runtime');
        $movie->rating = $request->input('rating');
        $movie->video = $request->input('video');
        $movie->poster = $request->file('poster')->store('movies');
        $movie->tag_id = $request->input('tag_id');
        $movie->producer_id = $request->input('producer_id');
        $movie->user_id = $request->input('user_id');

        $movie->save();

        $movie->genres()->sync($request->input('genre_id'));
        $movie->actors()->sync($request->input('actor_id'));

        return redirect()->route('movies.index')->with('success', 'Movie has been saved');

    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();
        return view('movies.edit', compact(['movie', 'tags', 'genres', 'actors', 'producers']));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->only('title', 'description', 'release_date', 'runtime',
                                        'rating', 'video', 'poster', 'tag_id', 'producer_id'));
        $movie->genres()->sync($request->genres);
        $movie->actors()->sync($request->actors);
        return redirect()->route('movies.index')->with('success', 'Movie has been updated');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie has been deleted');
    }
}
