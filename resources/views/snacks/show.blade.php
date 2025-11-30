@extends('layouts.cinema')

@section('title', $snack->name)
@section('header', 'Detalhes do Lanche')

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200 space-y-6">

    <h1 class="text-3xl font-extrabold text-red-700 border-b pb-2 mb-4">{{$snack->name}}</h1>
    
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Tipo:</h3>
        <p class="text-gray-900 ml-3">{{$snack->type}}</p>
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Preço:</h3>
        <p class="text-gray-900 ml-3">R$ {{ number_format($snack->price, 2, ',', '.') }}</p>
    </div>
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Estoque:</h3>
        <p class="text-gray-900 ml-3">{{$snack->stock_quantity}} unidades</p>
    </div>
    <div class="pt-4">
        <a href="{{ route('snacks.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out"><i class="fa-solid fa-arrow-left mr-2"></i> Voltar à Lista</a>
    </div>
</div>
@endsection