<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('user_id', Auth::id())->get();  
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(MovieRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if(Movie::create($data)) {
            return redirect()->route('movies.index')->with('sucesso', 'Filme criado com sucesso!');    
        } else {
            return redirect()->route('movies.index')->with('erro', 'Erro não foi possível cadastrar o filme.');
        }
    }

    public function show(string $id)
    {
        $movie = Movie::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('movies.show', compact('movie'));
    }

    public function edit(string $id)
    {
        $movie = Movie::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('movies.edit', compact('movie'));
    }

    public function update(MovieRequest $request, string $id)
    {
        $movie = Movie::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($movie->update($request->all())) {
            return redirect()->route('movies.index')->with('sucesso', 'Filme atualizado com sucesso!');    
        } else {
            return redirect()->route('movies.index')->with('erro', 'Erro não foi possível atualizar o filme.');
        }
    }

    public function destroy(string $id)
    {
        $movie = Movie::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($movie->delete()) {
            return redirect()->back()->with('sucesso', 'Filme deletado com sucesso!');    
        } else {
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o filme.');
        }
    }
}
