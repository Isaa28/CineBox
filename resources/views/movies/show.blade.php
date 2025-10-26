<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$movie->title}}</title>
</head>
<body>
    <div>
        <h1>{{$movie->title}}</h1>
        <h3>Diretor</h3>
        <p>{{$movie->director}}</p>
        <h3>Gênero</h3>
        <p>{{$movie->genre}}</p>
        <h3>Duração</h3>
        <p>{{$movie->duration}}</p>
        <a href="{{ route('movies.index') }}">Voltar</a>
    </div>
</body>
</html>