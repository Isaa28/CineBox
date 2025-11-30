<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieSession;
use App\Models\Movie;
use App\Models\Room;

class MovieSessionController extends Controller
{
   
    public function index()
    {
        $MovieSessions = MovieSession::with(['movie', 'room'])->get();
        return view('Sessions.index', compact('MovieSessions'));
    }

    public function create()
    {
        $movies = Movie::all();
        $rooms = Room::all();
        return view('Sessions.create', compact('movies', 'rooms'));
    }

    public function store(Request $request)
    {
        if(MovieSession::create($request->all())) {
            return redirect()->route('Sessions.index')->with('sucesso', 'Sessão criada com sucesso!');    
        }else{
            return redirect()->route('Sessions.index')->with('erro', 'Erro não foi possível cadastrar a sessão.');
        }
    }

    public function show(string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        return view('Sessions.show', compact('session'));
    }

    public function edit(string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        $movies = Movie::all();
        $rooms = Room::all();
        return view('Sessions.edit', compact('session', 'movies', 'rooms'));
    }

    public function update(Request $request, string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        if($MovieSession->update($request->all())) {
            return redirect()->route('Sessions.index')->with('sucesso', 'Sessão atualizada com sucesso!');    
        }else{
            return redirect()->route('Sessions.index')->with('erro', 'Erro não foi possível atualizar a sessão.');
        }
    }

    public function destroy(string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        if($MovieSession->delete()) {
            return redirect()->back()->with('sucesso', 'Sessão deletada com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar a sessão.');
        }
    }
}
