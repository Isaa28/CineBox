@extends('layouts.cinema')

@section('title', 'Editar Lanche')
@section('header', 'Editar Lanche: ' . $snack->name)

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200">
    <form action="{{ route('snacks.update', $snack->id) }}" method="post" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome:</label>
            <input type="text" name="name" id="name" value="{{ $snack->name }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Tipo:</label>
            <input type="text" name="type" id="type" value="{{ $snack->type }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Preço:</label>
            <input type="number" name="price" step="0.01" id="price" value="{{ $snack->price }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="stock_quantity" class="block text-sm font-medium text-gray-700 mb-1">Estoque:</label>
            <input type="number" name="stock_quantity" id="stock_quantity" value="{{ $snack->stock_quantity }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div class="flex items-center justify-end pt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection