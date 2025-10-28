<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Movie;
use App\Models\Room;

class sessionController extends Controller
{
   
    public function index()
    {
        $sessions = Session::with(['movie', 'room'])->get();
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        $movies = Movie::all();
        $rooms = Room::all();
        return view('sessions.create', compact('movies', 'rooms'));
    }

    public function store(Request $request)
    {
        if(Session::create($request->all())) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão criada com sucesso!');    
        }else{
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível cadastrar a sessão.');
        }
    }

    public function show(string $id)
    {
        $session = Session::findOrFail($id);
        return view('sessions.show', compact('session'));
    }

    public function edit(string $id)
    {
        $session = Session::findOrFail($id);
        $movies = Movie::all();
        $rooms = Room::all();
        return view('sessions.edit', compact('session', 'movies', 'rooms'));
    }

    public function update(Request $request, string $id)
    {
        $session = Session::findOrFail($id);
        if($session->update($request->all())) {
            return redirect()->route('sessions.index')->with('sucesso', 'Sessão atualizada com sucesso!');    
        }else{
            return redirect()->route('sessions.index')->with('erro', 'Erro não foi possível atualizar a sessão.');
        }
    }

    public function destroy(string $id)
    {
        $session = Session::findOrFail($id);
        if($session->delete()) {
            return redirect()->back()->with('sucesso', 'Sessão deletada com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar a sessão.');
        }
    }
}
