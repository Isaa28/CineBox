@extends('layouts.cinema')

@section('title', 'Editar Ingresso')
@section('header', 'Editar Ingresso')

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200">
    <form action="{{ route('tickets.update', $ticket->id) }}" method="post" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-1">Cliente:</label>
            <input type="text" name="customer_name" id="customer_name" value="{{ $ticket->customer_name }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="session_id" class="block text-sm font-medium text-gray-700 mb-1">Nome da Sessão:</label>
            <select name="session_id" id="session_id" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                @foreach($sessions as $session)
                    <option value="{{ $session->id }}" {{ $session->id == $ticket->session_id ? 'selected' : '' }}>
                    {{ $session->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="seat_number" class="block text-sm font-medium text-gray-700 mb-1">Assento:</label>
            <input type="number" name="seat_number" id="seat_number" value="{{ $ticket->seat_number }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>
        <div>
            <label for="purchase_date" class="block text-sm font-medium text-gray-700 mb-1">Data da compra:</label>
            <input type="datetime-local" name="purchase_date" id="purchase_date" value="{{ \Carbon\Carbon::parse($ticket->purchase_date)->format('Y-m-d\TH:i') }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div class="flex items-center justify-end pt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Salvar Edição</button>
        </div>
    </form>
</div>
@endsection