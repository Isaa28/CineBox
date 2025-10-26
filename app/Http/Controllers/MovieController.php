<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
   
    public function index()
    {
        $movies = Movie::all();  
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route('movies.index');
    }

    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect()->route('movies.index');
    }

    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->back();
    }
}
