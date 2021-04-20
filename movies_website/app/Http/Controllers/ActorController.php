<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{

    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    public function create()
    {
        return view('actors.create');
    }

    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->firstname = $request->input('firstname');
        $actor->lastname = $request->input('lastname');
        $actor->biography = $request->input('biography');
        $actor->photo = $request->file('photo')->store('actors');

        $actor->save();
        return redirect()->route('actors.index')->with('success', 'Actor has been saved');
    }

    public function show(Actor $actor)
    {
        //
    }

    public function edit(Actor $actor)
    {
        return view('actors.edit', compact('actor'));
    }

    public function update(Request $request, Actor $actor)
    {
        $actor->update($request->only('firstname', 'lastname', 'biography', 'photo'));
        return redirect()->route('actors.index')->with('success', 'Actor has been updated');
    }

    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('actors.index')->with('success', 'Actor has been deleted');
    }
}
