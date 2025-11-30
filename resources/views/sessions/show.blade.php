@extends('layouts.cinema')

@section('title', $session->name)
@section('header', 'Detalhes da Sessão')

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200 space-y-6">

    <h1 class="text-3xl font-extrabold text-red-700 border-b pb-2 mb-4">{{$session->name}}</h1>
    
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Filme:</h3>
        <p class="text-gray-900 ml-3">{{$session->movie->title}}</p>
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Sala:</h3>
        <p class="text-gray-900 ml-3">{{$session->room->name}}</p>
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Data e Hora:</h3>
        <p class="text-gray-900 ml-3">{{ \Carbon\Carbon::parse($session->date_time)->format('d/m/Y H:i') }}</p>
    </div>
    <div class="pt-4">
        <a href="{{ route('sessions.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out"><i class="fa-solid fa-arrow-left mr-2"></i> Voltar à Lista</a>
    </div>
</div>
@endsection