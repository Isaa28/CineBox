<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-red-700 leading-tight">Painel de Gerenciamento do Cinema</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    
                    <div class="bg-white p-6 shadow-2xl rounded-xl border-l-4 border-red-600">
                        <p class="text-sm font-medium text-gray-500">Filmes em Cartaz</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalMovies ?? 0 }}</p>
                        <a href="{{ route('movies.index') }}" class="text-sm text-red-600 hover:text-red-800 mt-2 block">Ver Lista</a>
                    </div>

                    <div class="bg-white p-6 shadow-2xl rounded-xl border-l-4 border-red-600">
                        <p class="text-sm font-medium text-gray-500">Sessões Agendadas Hoje</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $todaySessions ?? 0 }}</p> 
                        <a href="{{ route('sessions.index') }}" class="text-sm text-red-600 hover:text-red-800 mt-2 block">Ver Detalhes</a>
                    </div>
                    
                    <div class="bg-white p-6 shadow-2xl rounded-xl border-l-4 border-red-600">
                        <p class="text-sm font-medium text-gray-500">Produtos de Lanche</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalSnacks }}</p> 
                        <a href="{{ route('snacks.index') }}" class="text-sm text-red-600 hover:text-red-800 mt-2 block">Gerenciar Estoque</a>
                    </div>

                    <div class="bg-white p-6 shadow-2xl rounded-xl border-l-4 border-red-600">
                        <p class="text-sm font-medium text-gray-500">Salas de Exibição</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalRooms }}</p> 
                        <a href="{{ route('rooms.index') }}" class="text-sm text-red-600 hover:text-red-800 mt-2 block">Ver Salas</a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Ações Rápidas:</h3>
                    <div class="flex flex-wrap gap-4">
                        
                        <a href="{{ route('movies.create') }}" class="flex items-center px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition duration-150">
                            <i class="fa-solid fa-plus mr-2"></i> Cadastrar Filme
                        </a>
                        
                        <a href="{{ route('sessions.create') }}" class="flex items-center px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition duration-150">
                            <i class="fa-solid fa-calendar-plus mr-2"></i> Agendar Sessão
                        </a>
                        
                        <a href="{{ route('tickets.index') }}" class="flex items-center px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 transition duration-150">
                            <i class="fa-solid fa-ticket mr-2"></i> Vendas de Ingresso
                        </a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <p class="text-gray-700">Bem-vindo(a) ao painel de gerenciamento do cinema. Use os links acima para navegar e gerenciar seus filmes, sessões, lanches e ingressos.</p>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>