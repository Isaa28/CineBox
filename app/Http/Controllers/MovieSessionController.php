<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieSessionRequest;
use App\Models\MovieSession;
use App\Models\Movie;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class MovieSessionController extends Controller
{
    public function index()
    {
        $MovieSessions = MovieSession::with(['movie', 'room'])->where('user_id', Auth::id())->get();

        return view('sessions.index', compact('MovieSessions'));
    }

    public function create()
    {
        $movies = Movie::where('user_id', Auth::id())->get();
        $rooms  = Room::where('user_id', Auth::id())->get();

        return view('sessions.create', compact('movies', 'rooms'));
    }

    public function store(MovieSessionRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if(MovieSession::create($data)) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão criada com sucesso!');
        } else {
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível cadastrar a sessão.');
        }
    }

    public function show(string $id)
    {
        $MovieSession = MovieSession::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('sessions.show', compact('MovieSession'));
    }

    public function edit(string $id)
    {
        $MovieSession = MovieSession::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $movies = Movie::where('user_id', Auth::id())->get();
        $rooms  = Room::where('user_id', Auth::id())->get();

        return view('sessions.edit', compact('MovieSession', 'movies', 'rooms'));
    }

    public function update(MovieSessionRequest $request, string $id)
    {
        $MovieSession = MovieSession::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($MovieSession->update($request->all())) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão atualizada com sucesso!');
        } else {
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível atualizar a sessão.');
        }
    }

    public function destroy(string $id)
    {
        $MovieSession = MovieSession::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($MovieSession->delete()) {
            return redirect()->back()->with('sucesso', 'Sessão deletada com sucesso!');
        } else {
            return redirect()->back()->with('erro', 'Erro não foi possível deletar a sessão.');
        }
    }
}
