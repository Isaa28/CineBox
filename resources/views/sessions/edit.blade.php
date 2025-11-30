@extends('layouts.cinema')

@section('title', 'Editar Sessão')
@section('header', 'Editar Sessão: ' . $session->name)

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200">
    <form action="{{ route('sessions.update', $session->id) }}" method="post" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome da Sessão:</label>
            <input type="text" name="name" id="name" value="{{ $session->name }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="movie_id" class="block text-sm font-medium text-gray-700 mb-1">Filme:</label>
            <select name="movie_id" id="movie_id" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ $movie->id == $session->movie_id ? 'selected' : '' }}>
                    {{ $movie->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="room_id" class="block text-sm font-medium text-gray-700 mb-1">Sala:</label>
            <select name="room_id" id="room_id" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->id == $session->room_id ? 'selected' : '' }}>
                        {{ $room->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="date_time" class="block text-sm font-medium text-gray-700 mb-1">Data e Hora:</label>
            <input type="text" name="date_time" id="date_time" value="{{ $session->date_time }}" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div class="flex items-center justify-end pt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection