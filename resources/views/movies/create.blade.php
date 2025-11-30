@extends('layouts.cinema')

@section('title', 'Cadastrar Filme')
@section('header', 'Cadastro de Filmes')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('movies.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full p-3 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-red-500 focus:border-red-500" placeholder="Ex: O Poderoso Chefão" required>
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="genre" class="block text-sm font-medium text-gray-700 mb-1">Gênero:</label>
            <input type="text" name="genre" id="genre" value="{{ old('genre') }}" class="w-full p-3 border @error('genre') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-red-500 focus:border-red-500" placeholder="Ex: Drama, Suspense" required>
            @error('genre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="director" class="block text-sm font-medium text-gray-700 mb-1">Diretor:</label>
            <input type="text" name="director" id="director" value="{{ old('director') }}" class="w-full p-3 border @error('director') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-red-500 focus:border-red-500" placeholder="Ex: Steven Spielberg" required>
            @error('director')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Duração:</label>
            <input type="time" name="duration" id="duration" value="{{ old('duration') }}" class="w-full p-3 border @error('duration') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-red-500 focus:border-red-500 text-gray-600" required>
            @error('duration')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg hover:bg-gray-400 mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
