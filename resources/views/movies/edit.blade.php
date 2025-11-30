@extends('layouts.cinema')

@section('title', 'Editar Filme')
@section('header', 'Editar Filme: ' . $movie->title)

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200">
    <form action="{{ route('movies.update', $movie->id) }}" method="post" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título:</label>
            <input type="text" name="title" id="title" value="{{ $movie->title }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        
        <div>
            <label for="genre" class="block text-sm font-medium text-gray-700 mb-1">Gênero:</label>
            <input type="text" name="genre" id="genre" value="{{ $movie->genre }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        
        <div>
            <label for="director" class="block text-sm font-medium text-gray-700 mb-1">Diretor:</label>
            <input type="text" name="director" id="director" value="{{ $movie->director }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        
        <div>
            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Duração:</label>
            <input type="time" name="duration" id="duration" value="{{ $movie->duration }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div class="flex items-center justify-end pt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection