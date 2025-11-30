@extends('layouts.cinema')

@section('title', 'Cadastrar Sala')
@section('header', 'Cadastro de Sala')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('rooms.store') }}" method="post" class="space-y-6">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome da Sala:</label>
            <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Sala 1 VIP" required>
        </div>
        
        <div>
            <label for="capacity" class="block text-sm font-medium text-gray-700 mb-1">Capacidade:</label>
            <input type="number" name="capacity" id="capacity" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: 50" required>
        </div>
        
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Tipo:</label>
            <input type="text" name="type" id="type" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: 2D, 3D, IMAX" required>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>  
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar</button>
        </div>
    </form>
</div>
@endsection