@extends('layouts.cinema')

@section('title', $ticket->customer_name)
@section('header', 'Detalhes do Ingresso')

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200 space-y-6">

    <h1 class="text-3xl font-extrabold text-red-700 border-b pb-2 mb-4">Ingresso de {{$ticket->customer_name}}</h1>
    
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Sessão:</h3>
        <p class="text-gray-900 ml-3">{{$ticket->session->name ?? 'Sessão não encontrada'}}</p> 
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Assento:</h3>
        <p class="text-gray-900 ml-3">{{$ticket->seat_number}}</p>
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Data da compra:</h3>
        <p class="text-gray-900 ml-3">{{ \Carbon\Carbon::parse($ticket->purchase_date)->format('d/m/Y H:i') }}</p>
    </div>
    <div class="pt-4">
        <a href="{{ route('tickets.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out"><i class="fa-solid fa-arrow-left mr-2"></i> Voltar à Lista</a>
    </div>
</div>
@endsection