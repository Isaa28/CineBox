@extends('layouts.cinema')

@section('title', 'Editar Filme')
@section('header', 'Editar Filme: ' . $movie->title)

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200">
    <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $movie->title) }}" class="w-full p-3 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="genre">Gênero:</label>
            <input type="text" name="genre" id="genre" value="{{ old('genre', $movie->genre) }}" class="w-full p-3 border @error('genre') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('genre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="director">Diretor:</label>
            <input type="text" name="director" id="director" value="{{ old('director', $movie->director) }}" class="w-full p-3 border @error('director') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('director')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="duration">Duração:</label>
            <input type="time" name="duration" id="duration" value="{{ old('duration', $movie->duration) }}" 
                   class="w-full p-3 border @error('duration') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('duration')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end pt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection
