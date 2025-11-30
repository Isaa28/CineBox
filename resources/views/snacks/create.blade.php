@extends('layouts.cinema')

@section('title', 'Cadastrar Lanche')
@section('header', 'Cadastro de Lanche')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('snacks.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: Pipoca Grande Doce" required>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ old('type') }}" class="w-full p-3 border @error('type') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: Salgado, Doce, Bebida" required>
            @error('type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="price">Preço (R$):</label>
            <input type="number" name="price" value="{{ old('price') }}" step="0.01" class="w-full p-3 border @error('price') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: 15.50" required>
            @error('price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="stock_quantity">Estoque:</label>
            <input type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" class="w-full p-3 border @error('stock_quantity') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: 100" required>
            @error('stock_quantity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
