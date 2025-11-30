<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SnackRequest;
use Illuminate\Http\Request;
use App\Models\Snack;

class SnackController extends Controller
{
    public function index()
    {
        $snacks = Snack::all();  
        return view('snacks.index', compact('snacks'));
    }

    public function create()
    {
        return view('snacks.create');
    }

    public function store(SnackRequest $request)
    {
        if(Snack::create($request->all())) {
            return redirect()->route('snacks.index')->with('sucesso', 'Lanche criado com sucesso!');    
        }else{
            return redirect()->route('snacks.index')->with('erro', 'Erro não foi possível cadastrar o lanche.');
        }
    }

    public function show(string $id)
    {
        $snack = Snack::findOrFail($id);
        return view('snacks.show', compact('snack'));
    }

    public function edit(string $id)
    {
        $snack = Snack::findOrFail($id);
        return view('snacks.edit', compact('snack'));
    }

    public function update(SnackRequest $request, string $id)
    {
        $snack = Snack::findOrFail($id);
        if($snack->update($request->all())) {
            return redirect()->route('snacks.index')->with('sucesso', 'Lanche atualizado com sucesso!');    
        }else{
            return redirect()->route('snacks.index')->with('erro', 'Erro não foi possível atualizar o lanche.');
        }
    }

    public function destroy(string $id)
    {
        $snack = Snack::findOrFail($id);
        if($snack->delete()) {
            return redirect()->back()->with('sucesso', 'Lanche deletado com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o lanche.');
        }
    }
}
