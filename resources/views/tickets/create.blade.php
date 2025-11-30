@extends('layouts.cinema')

@section('title', 'Cadastrar Ingresso')
@section('header', 'Cadastro de Ingresso')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('tickets.store') }}" method="post" class="space-y-6">
        @csrf
        
        <div>
            <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-1">Cliente:</label>
            <input type="text" name="customer_name" id="customer_name"class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: João Silva"required>
        </div>
        <div>
            <label for="session_id" class="block text-sm font-medium text-gray-700 mb-1">Sessão:</label>
            <select name="session_id" id="session_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 bg-white transition duration-150 ease-in-out" required>
                <option value="">Selecione uma sessão</option>
                @foreach($sessions as $session)
                    <option value="{{ $session->id }}">
                        {{ $session->name }} - {{ \Carbon\Carbon::parse($session->date_time)->format('d/m/Y H:i') }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="seat_number" class="block text-sm font-medium text-gray-700 mb-1">Assento:</label>
            <input type="number" name="seat_number" id="seat_number" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition duration-150 ease-in-out" placeholder="Ex: 5" required>
        </div>
        <div>
            <label for="purchase_date" class="block text-sm font-medium text-gray-700 mb-1">Data da compra:</label>
            <input type="datetime-local" name="purchase_date" id="purchase_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 text-gray-600 transition duration-150 ease-in-out" required>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar</button>
        </div>
    </form>
</div>
@endsection