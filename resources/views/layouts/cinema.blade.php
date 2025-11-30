<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Cinema Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

    @include('layouts.navigation')

    <main class="max-w-5xl mx-auto mt-8 p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">@yield('header')</h1>
        @yield('content')
    </main>

</body>
</html>