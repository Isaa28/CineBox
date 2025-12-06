<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\MovieSession;

class TicketController extends Controller
{
    
    public function index()
    {
        $tickets = Ticket::with(['session'])->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $sessions = MovieSession::all();
        return view('tickets.create', compact('sessions'));
    }

    public function store(TicketRequest $request)
    {
        if(Ticket::create($request->all())) {
            return redirect()->route('tickets.index')->with('sucesso', 'Ingresso criado com sucesso!');    
        }else{
            return redirect()->route('tickets.index')->with('erro', 'Erro não foi possível cadastrar o ingresso.');
        }
    }

    public function show(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.show', compact('ticket'));
    }

    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $sessions = MovieSession::all();
        return view('tickets.edit', compact('ticket', 'sessions'));
    }

    public function update(TicketRequest $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);
        if($ticket->update($request->all())) {
            return redirect()->route('tickets.index')->with('sucesso', 'Ingresso atualizado com sucesso!');    
        }else{
            return redirect()->route('tickets.index')->with('erro', 'Erro não foi possível atualizar o ingresso.');
        }
    }

    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        if($ticket->delete()) {
            return redirect()->back()->with('sucesso', 'Ingresso deletado com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o ingresso.');
        }
    }
}
