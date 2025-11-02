<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div>
        <h2>Editar filme</h2>
        <form action="{{route('movies.update', $movie->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Título:</label>
                <input type="text" name="title" value="{{ $movie->title }}" required>
            </div>
            <div>
                <label for="genre">Gênero:</label>
                <input type="text" name="genre" value="{{ $movie->genre }}" required>
            </div>
            <div>
                <label for="director">Diretor:</label>
                <input type="text" name="director" value="{{ $movie->director }}" required>
            </div>
            <div>
                <label for="duration">Duração:</label>
                <input type="time" name="duration" value="{{ $movie->duration }}" required>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>