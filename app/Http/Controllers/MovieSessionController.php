<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieSessionRequest;
use Illuminate\Http\Request;
use App\Models\MovieSession;
use App\Models\Movie;
use App\Models\Room;

class MovieSessionController extends Controller
{
   
    public function index()
    {
        $MovieSessions = MovieSession::with(['movie', 'room'])->get();
        return view('sessions.index', compact('MovieSessions'));
    }

    public function create()
    {
        $movies = Movie::all();
        $rooms = Room::all();
        return view('sessions.create', compact('movies', 'rooms'));
    }

    public function store(MovieSessionRequest $request)
    {
        if(MovieSession::create($request->all())) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão criada com sucesso!');    
        }else{
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível cadastrar a sessão.');
        }
    }

    public function show(string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        return view('sessions.show', compact('MovieSession'));
    }

    public function edit(string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        $movies = Movie::all();
        $rooms = Room::all();
        return view('sessions.edit', compact('MovieSession', 'movies', 'rooms'));
    }

    public function update(MovieSessionRequest $request, string $id)
    {
        $MovieSession = MovieSession::findOrFail($id);
        if($MovieSession->update($request->all())) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão atualizada com sucesso!');    
        }else{
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível atualizar a sessão.');
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
