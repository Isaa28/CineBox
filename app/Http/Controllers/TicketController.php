<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use App\Models\MovieSession;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['session'])->where('user_id', Auth::id())->get();

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $sessions = MovieSession::where('user_id', Auth::id())->get();
        return view('tickets.create', compact('sessions'));
    }

    public function store(TicketRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if(Ticket::create($data)) {
            return redirect()->route('tickets.index')->with('sucesso', 'Ingresso criado com sucesso!');
        } else {
            return redirect()->route('tickets.index')->with('erro', 'Erro não foi possível cadastrar o ingresso.');
        }
    }

    public function show(string $id)
    {
        $ticket = Ticket::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('tickets.show', compact('ticket'));
    }

    public function edit(string $id)
    {
        $ticket = Ticket::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $sessions = MovieSession::where('user_id', Auth::id())->get();
        return view('tickets.edit', compact('ticket', 'sessions'));
    }

    public function update(TicketRequest $request, string $id)
    {
        $ticket = Ticket::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($ticket->update($request->all())) {
            return redirect()->route('tickets.index')->with('sucesso', 'Ingresso atualizado com sucesso!');
        } else {
            return redirect()->route('tickets.index')->with('erro', 'Erro não foi possível atualizar o ingresso.');
        }
    }

    public function destroy(string $id)
    {
        $ticket = Ticket::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if($ticket->delete()) {
            return redirect()->back()->with('sucesso', 'Ingresso deletado com sucesso!');
        } else {
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o ingresso.');
        }
    }
}
