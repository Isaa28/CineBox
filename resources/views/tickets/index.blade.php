@extends('layouts.cinema')

@section('title', 'Ingressos')
@section('header', 'Lista de Ingressos')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">

    <div class="flex justify-between items-center mb-6 p-4 bg-white rounded-lg shadow-md border border-gray-200">
        <a href="{{ route('tickets.create') }}" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-150 ease-in-out">Cadastrar Novo Ingresso</a>
        
        @if (session()->has('sucesso'))
            <p class="text-green-600 font-medium">{{ session()->get('sucesso')}}</p>
        @elseif (session()->has('erro'))
            <p class="text-red-600 font-medium">{{ session()->get('erro')}}</p>
        @endif
    </div>

    <div class="bg-white overflow-hidden shadow-2xl rounded-xl border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assento</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($tickets as $ticket)
                        <tr class="hover:bg-gray-50 transition duration-100 ease-in-out">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$ticket->seat_number}}</td>
                            <td class="px-2 py-4 whitespace-nowrap text-center text-sm font-medium w-1/12"><a href="{{route('tickets.edit', $ticket->id)}}" class="text-blue-600 hover:text-blue-900 mx-1 p-2 rounded-full hover:bg-blue-50"><i class="fa-solid fa-pen"></i></a></td>
                            <td class="px-2 py-4 whitespace-nowrap text-center text-sm font-medium w-1/12">
                                <form action="{{route('tickets.destroy', $ticket->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar este ingresso?');" class="inline-block"> 
                                    @csrf 
                                    @method('DELETE') 
                                    <button type="submit" class="text-red-600 hover:text-red-900 mx-1 p-2 rounded-full hover:bg-red-50"><i class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </td>
                            <td class="px-2 py-4 whitespace-nowrap text-center text-sm font-medium w-1/12"><a href="{{route('tickets.show', $ticket->id)}}" class="text-green-600 hover:text-green-900 mx-1 p-2 rounded-full hover:bg-green-50"><i class="fa-regular fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection