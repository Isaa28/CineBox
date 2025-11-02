<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar sala</title>
</head>
<body>
    <div>
        <h2>Cadastrar sala</h2>
        <form action="{{route('rooms.store')}}" method="post">
            @csrf
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="capacity">Capacidade:</label>
                <input type="number" name="capacity" required>
            </div>
            <div>
                <label for="type">Tipo:</label>
                <input type="text" name="type" required>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>