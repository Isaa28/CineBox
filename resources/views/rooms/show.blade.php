<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$room->name}}</title>
</head>
<body>
    <div>
        <h1>{{$room->name}}</h1>
        <h3>Capacidade</h3>
        <p>{{$room->capacity}}</p>
        <h3>Tipo</h3>
        <p>{{$room->type}}</p>
        <a href="{{ route('rooms.index') }}">Voltar</a>
    </div>
</body>
</html>