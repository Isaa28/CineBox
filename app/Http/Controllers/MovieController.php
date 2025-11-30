<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
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

    public function store(MovieRequest $request)
    {
        if(Movie::create($request->all())) {
            return redirect()->route('movies.index')->with('sucesso', 'Filme criado com sucesso!');    
        }else{
            return redirect()->route('movies.index')->with('erro', 'Erro não foi possível cadastrar o filme.');
        }
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

    public function update(MovieRequest $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        if($movie->update($request->all())) {
            return redirect()->route('movies.index')->with('sucesso', 'Filme atualizado com sucesso!');    
        }else{
            return redirect()->route('movies.index')->with('erro', 'Erro não foi possível atualizar o filme.');
        }
    }

    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        if($movie->delete()) {
            return redirect()->back()->with('sucesso', 'Filme deletado com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o filme.');
        }
    }
}
