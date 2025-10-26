<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar filme</title>
</head>
<body>
    <div>
        <h2>Cadastrar filme</h2>
        <form action="{{route('movies.store')}}" method="post">
            @csrf
            <div>
                <label for="title">Título:</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="genre">Gênero:</label>
                <input type="text" name="genre">
            </div>
            <div>
                <label for="director">Diretor:</label>
                <input type="text" name="director">
            </div>
            <div>
                <label for="duration">Duração:</label>
                <input type="text" name="duration">
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>