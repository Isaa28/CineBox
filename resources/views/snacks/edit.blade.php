@extends('layouts.cinema')

@section('title', 'Editar Lanche')
@section('header', 'Editar Lanche: ' . $snack->name)

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('snacks.update', $snack->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ old('name', $snack->name) }}" class="w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ old('type', $snack->type) }}" class="w-full p-3 border @error('type') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="price">Preço:</label>
            <input type="number" name="price" value="{{ old('price', $snack->price) }}" step="0.01" class="w-full p-3 border @error('price') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="stock_quantity">Estoque:</label>
            <input type="number" name="stock_quantity" value="{{ old('stock_quantity', $snack->stock_quantity) }}" class="w-full p-3 border @error('stock_quantity') border-red-500 @else border-gray-300 @enderror rounded-lg">
            @error('stock_quantity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection
