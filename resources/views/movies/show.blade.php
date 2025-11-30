@extends('layouts.cinema')

@section('title', $movie->title)
@section('header', 'Detalhes do Filme')

@section('content')
<div class="max-w-xl mx-auto p-8 bg-white shadow-2xl rounded-xl border border-gray-200 space-y-6">

    <h1 class="text-3xl font-extrabold text-red-700 border-b pb-2 mb-4">{{$movie->title}}</h1>
    
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Diretor:</h3>
        <p class="text-gray-900 ml-3">{{$movie->director}}</p>
    </div> 
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Gênero:</h3>
        <p class="text-gray-900 ml-3">{{$movie->genre}}</p>
    </div>  
    <div class="border-b border-gray-100 pb-3">
        <h3 class="text-lg font-semibold text-gray-600">Duração:</h3>
        <p class="text-gray-900 ml-3">{{$movie->duration}}</p>
    </div>
    <div class="pt-4">
        <a href="{{ route('movies.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 transition duration-150 ease-in-out"><i class="fa-solid fa-arrow-left mr-2"></i> Voltar à Lista</a>
    </div>
</div>
@endsection