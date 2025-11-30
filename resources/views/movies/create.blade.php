@extends('layouts.cinema')

@section('title', 'Cadastrar Filme')

@section('header') 
    Cadastro de Filmes
@endsection

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">

    <form action="{{ route('movies.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título:</label>
            <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: O Poderoso Chefão" required>
        </div>

        <div>
            <label for="genre" class="block text-sm font-medium text-gray-700 mb-1">Gênero:</label>
            <input type="text" name="genre" id="genre" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Drama, Suspense" required>
        </div>

        <div>
            <label for="director" class="block text-sm font-medium text-gray-700 mb-1">Diretor:</label>
            <input type="text" name="director" id="director" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Steven Spielberg" required>
        </div>

        <div>
            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Duração:</label>
            <input type="time" name="duration" id="duration" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 text-gray-600 transition duration-150 ease-in-out" required>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar</button>
        </div>
    </form>
</div>
@endsection