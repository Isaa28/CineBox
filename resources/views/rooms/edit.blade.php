@extends('layouts.cinema')

@section('title', 'Editar Sala')
@section('header', 'Editar Sala: ' . $room->name)

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('rooms.update', $room->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ old('name', $room->name) }}" class="w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="capacity">Capacidade:</label>
            <input type="number" name="capacity" value="{{ old('capacity', $room->capacity) }}" class="w-full p-3 border @error('capacity') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('capacity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ old('type', $room->type) }}" class="w-full p-3 border @error('type') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection
