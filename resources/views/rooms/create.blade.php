@extends('layouts.cinema')

@section('title', 'Cadastrar Sala')
@section('header', 'Cadastro de Sala')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('rooms.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="name">Nome da Sala:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: Sala 1 VIP" required>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="capacity">Capacidade:</label>
            <input type="number" name="capacity" value="{{ old('capacity') }}" class="w-full p-3 border @error('capacity') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: 50" required>
            @error('capacity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ old('type') }}" class="w-full p-3 border @error('type') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: 2D, 3D, IMAX" required>
            @error('type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
