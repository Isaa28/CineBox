<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div>
        <h2>Editar</h2>
        <form action="{{route('rooms.update', $room->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" value="{{ $room->name }}" required>
            </div>
            <div>
                <label for="capacity">Capacidade:</label>
                <input type="number" name="capacity" value="{{ $room->capacity }}" required>
            </div>
            <div>
                <label for="type">Tipo:</label>
                <input type="text" name="type" value="{{ $room->type }}" required>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>