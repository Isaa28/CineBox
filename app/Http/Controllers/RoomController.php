<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::where('user_id', Auth::id())->get();  
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(RoomRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if(Room::create($data)) {
            return redirect()->route('rooms.index')->with('sucesso', 'Sala criada com sucesso!');    
        } else {
            return redirect()->route('rooms.index')->with('erro', 'Erro não foi possível cadastrar a sala.');
        }
    }

    public function show(string $id)
    {
        $room = Room::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('rooms.show', compact('room'));
    }

    public function edit(string $id)
    {
        $room = Room::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('rooms.edit', compact('room'));
    }

    public function update(RoomRequest $request, string $id)
    {
        $room = Room::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($room->update($request->all())) {
            return redirect()->route('rooms.index')->with('sucesso', 'Sala atualizada com sucesso!');    
        } else {
            return redirect()->route('rooms.index')->with('erro', 'Erro não foi possível atualizar a sala.');
        }
    }

    public function destroy(string $id)
    {
        $room = Room::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($room->delete()) {
            return redirect()->back()->with('sucesso', 'Sala deletada com sucesso!');    
        } else {
            return redirect()->back()->with('erro', 'Erro não foi possível deletar a sala.');
        }
    }
}
