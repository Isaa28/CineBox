<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cinebox - Login</title>
<link href="https://www.google.com/search?q=https://fonts.bunny.net/css%3Ffamily%3Dinstrument-sans:400,500,600,700" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white flex items-center justify-center min-h-screen p-4">
    
    <div class="w-full max-w-md">
      
        <div class="bg-white shadow-xl rounded-xl p-8 border border-gray-100">
            
            <div class="text-center mb-8">
                <svg class="mx-auto w-12 h-12 text-rose-600 mb-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                <h1 class="text-3xl font-bold text-gray-900">Login no <span class="text-rose-600">Cinebox</span></h1>
                <p class="text-sm text-gray-500 mt-1">Acesse sua conta de gerenciamento.</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-rose-500 focus:ring-rose-500 transition duration-150">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-rose-500 focus:ring-rose-500 transition duration-150">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 text-rose-600 border-gray-300 rounded focus:ring-rose-500" name="remember">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Lembrar-me</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-rose-600 hover:text-rose-500" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                    @endif
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 transition duration-150">Entrar</button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Não tem conta?<a href="{{ route('register') }}" class="font-medium text-rose-600 hover:text-rose-500">Cadastre-se agora</a></p>
            </div>
            
        </div>
    </div>
</body>
</html>