<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div>
        <h2>Editar sessão</h2>
        <form action="{{route('sessions.update', $session->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Nome da Sessão:</label>
                <input type="text" name="name" value="{{ $session->name }}" required>
            </div>
            <div>
                <label for="movie_id">Filme:</label>
                <select name="movie_id" required>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $movie->id == $session->movie_id ? 'selected' : '' }}>
                        {{ $movie->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="room_id">Sala:</label>
                <select name="room_id" required>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}" {{ $room->id == $session->room_id ? 'selected' : '' }}>
                            {{ $room->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="date_time">Data e Hora:</label>
                <input type="text" name="date_time" value="{{ $session->date_time }}" required>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>