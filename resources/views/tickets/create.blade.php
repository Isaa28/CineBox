@extends('layouts.cinema')

@section('title', 'Cadastrar Ingresso')
@section('header', 'Cadastro de Ingresso')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <form action="{{ route('tickets.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="customer_name">Cliente:</label>
            <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="w-full p-3 border @error('customer_name') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: João Silva" required>
            @error('customer_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="session_id">Sessão:</label>
            <select name="session_id" class="w-full p-3 border @error('session_id') border-red-500 @else border-gray-300 @enderror rounded-lg bg-white" required>
                <option value="">Selecione uma sessão</option>
                @foreach($sessions as $session)
                    <option value="{{ $session->id }}" {{ old('session_id') == $session->id ? 'selected' : '' }}>
                        {{ $session->name }} - {{ \Carbon\Carbon::parse($session->date_time)->format('d/m/Y H:i') }}
                    </option>
                @endforeach
            </select>
            @error('session_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="seat_number">Assento:</label>
            <input type="number" name="seat_number" value="{{ old('seat_number') }}" class="w-full p-3 border @error('seat_number') border-red-500 @else border-gray-300 @enderror rounded-lg" placeholder="Ex: 5" required>
            @error('seat_number') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="purchase_date">Data da Compra:</label>
            <input type="datetime-local" name="purchase_date" value="{{ old('purchase_date') }}" class="w-full p-3 border @error('purchase_date') border-red-500 @else border-gray-300 @enderror rounded-lg text-gray-600" required>
            @error('purchase_date') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="javascript:history.back()" class="px-4 py-2 bg-gray-300 rounded-lg mr-4">Voltar</a>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
