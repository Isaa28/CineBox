@extends('layouts.cinema')

@section('title', 'Cadastrar Sessão')
@section('header', 'Cadastro de Sessão')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('sessions.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="name">Nome da Sessão:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: Sessão Noturna" required>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="movie_id">Filme:</label>
            <select name="movie_id" class="w-full p-3 border @error('movie_id') border-red-500 @else border-gray-300 @enderror rounded-lg bg-white" required>
                <option value="">Selecione um filme</option>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>
                        {{ $movie->title }}
                    </option>
                @endforeach
            </select>
            @error('movie_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="room_id">Sala:</label>
            <select name="room_id" class="w-full p-3 border @error('room_id') border-red-500 @else border-gray-300 @enderror rounded-lg bg-white" required>
                <option value="">Selecione uma sala</option>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}" {{ old('room_id') == $room->id ? 'selected' : '' }}>
                        {{ $room->name }}
                    </option>
                @endforeach
            </select>
            @error('room_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="date_time">Data e Hora:</label>
            <input type="datetime-local" name="date_time" value="{{ old('date_time') }}" class="w-full p-3 border @error('date_time') border-red-500 @else border-gray-300 @enderror rounded-lg text-gray-600" required>
            @error('date_time') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
