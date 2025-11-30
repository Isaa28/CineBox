@extends('layouts.cinema')

@section('title', 'Cadastrar Lanche')
@section('header', 'Cadastro de Lanche')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('snacks.store') }}" method="post" class="space-y-6">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome:</label>
            <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Pipoca Grande Doce" required>
        </div>
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Tipo:</label>
            <input type="text" name="type" id="type" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: Salgado, Doce, Bebida" required>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Preço (R$):</label>
            <input type="number" name="price" id="price" step="0.01"class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: 15.50" required>
        </div>
        <div>
            <label for="stock_quantity" class="block text-sm font-medium text-gray-700 mb-1">Estoque:</label>
            <input type="number" name="stock_quantity" id="stock_quantity" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: 100" required>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar</button>
        </div>
    </form>
</div>
@endsection