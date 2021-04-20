<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function index()
    {
        $producers = Producer::all();
        return view('producers.index', compact('producers'));
    }

    public function create()
    {
        return view('producers.create');
    }

    public function store(Request $request)
    {
        $producer = new Producer();
        $producer->firstname = $request->input('firstname');
        $producer->lastname = $request->input('lastname');
        $producer->biography = $request->input('biography');
        $producer->photo = $request->file('photo')->store('producers');

        $producer->save();
        return redirect()->route('producers.index')->with('success', 'producer has been saved');
    }

    public function show(Producer $producer)
    {
        //
    }

    public function edit(Producer $producer)
    {
        return view('producers.edit', compact('producer'));
    }

    public function update(Request $request, Producer $producer)
    {
        $producer->update($request->only('firstname', 'lastname', 'biography', 'photo'));
        return redirect()->route('producers.index')->with('success', 'producer has been updated');
    }

    public function destroy(Producer $producer)
    {
        $producer->delete();
        return redirect()->route('producers.index')->with('success', 'producer has been deleted');
    }
}
