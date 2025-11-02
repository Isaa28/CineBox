<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$session->name}}</title>
</head>
<body>
    <div>
        <h1>{{$session->name}}</h1>
        <h3>Diretor</h3>
        <p>{{$session->movie->title}}</p>
        <h3>Gênero</h3>
        <p>{{$session->room->name}}</p>
        <h3>Duração</h3>
        <p>{{ \Carbon\Carbon::parse($session->date_time)->format('d/m/Y H:i') }}</p>
        <a href="{{ route('sessions.index') }}">Voltar</a>
    </div>
</body>
</html>