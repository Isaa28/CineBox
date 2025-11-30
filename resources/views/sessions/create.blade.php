@extends('layouts.cinema')

@section('title', 'Cadastrar Sessão')
@section('header', 'Cadastro de Sessão')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('sessions.store') }}" method="post" class="space-y-6">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome da Sessão:</label>
            <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Sessão Noturna" required>
        </div>
        <div>
            <label for="movie_id" class="block text-sm font-medium text-gray-700 mb-1">Filme:</label>
            <select name="movie_id" id="movie_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 bg-white transition duration-150 ease-in-out" required>
                <option value="">Selecione um filme</option>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="room_id" class="block text-sm font-medium text-gray-700 mb-1">Sala:</label>
            <select name="room_id" id="room_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 bg-white transition duration-150 ease-in-out" required>
                <option value="">Selecione uma sala</option>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="date_time" class="block text-sm font-medium text-gray-700 mb-1">Data e Hora:</label>
            <input type="datetime-local" name="date_time" id="date_time" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 text-gray-600 transition duration-150 ease-in-out" required>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar</button>
        </div>
    </form>
</div>
@endsection