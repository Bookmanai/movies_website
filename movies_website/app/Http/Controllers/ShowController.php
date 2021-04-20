<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Producer;
use App\Models\Tag;
use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::all();
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();
        return view('shows.index', compact(['shows', 'tags', 'genres', 'producers', 'actors']));
    }

    public function show_by_tag(Tag $tag){

        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        $shows = Show::where('tag_id', $tag->id)->get();
        return view('shows.index', compact(['shows', 'tags', 'genres', 'producers', 'actors']));
    }

    public function show_by_prod(Producer $producer){

        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        $shows = Show::where('producer_id', $producer->id)->get();
        return view('shows.index', compact(['shows', 'tags', 'genres', 'producers', 'actors']));
    }

    public function create()
    {
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();

        return view('shows.create', compact(['tags', 'genres', 'producers', 'actors']));
    }

    public function store(Request $request)
    {
        $show = new Show();
        $show->title = $request->input('title');
        $show->description = $request->input('description');
        $show->air_date = $request->input('air_date');
        $show->ending_date = $request->input('ending_date');
        $show->runtime = $request->input('runtime');
        $show->rating = $request->input('rating');
        $show->poster = $request->file('poster')->store('shows');
        $show->tag_id = $request->input('tag_id');
        $show->producer_id = $request->input('producer_id');
        $show->user_id = $request->input('user_id');

        $show->save();

        $show->genres()->sync($request->input('genre_id'));
        $show->actors()->sync($request->input('actor_id'));

        return redirect()->route('shows.index')->with('success', 'TV Show has been saved');

    }

    public function show(Show $show)
    {
        return view('shows.show', compact('show'));
    }

    public function edit(Show $show)
    {
        $tags = Tag::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $actors = Actor::all();
        return view('shows.edit', compact(['show', 'tags', 'producers']));
    }

    public function update(Request $request, Show $show)
    {
        $show->update($request->only('title', 'description', 'air_date', 'ending_date', 'runtime',
            'rating', 'poster', 'tag_id', 'producer_id'));
        return redirect()->route('shows.index')->with('success', 'TV Show has been updated');
    }

    public function destroy(Show $show)
    {
        $show->delete();
        return redirect()->route('shows.index')->with('success', 'TV Show has been deleted');
    }
}
