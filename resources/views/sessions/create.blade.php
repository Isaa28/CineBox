<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Sessão</title>
</head>
<body>
    <div>
        <h2>Cadastrar Sessão</h2>
        <form action="{{ route('sessions.store') }}" method="post">
            @csrf
            <div>
                <label for="name">Nome da Sessão:</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="movie_id">Filme:</label>
                <select name="movie_id" id="movie_id" required>
                    <option value="">Selecione um filme</option>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="room_id">Sala:</label>
                <select name="room_id" id="room_id" required>
                    <option value="">Selecione uma sala</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="date_time">Data e Hora:</label>
                <input type="datetime-local" name="date_time" id="date_time">
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>