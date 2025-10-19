<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
    <title>CineBox-Filmes</title>
</head>
<body>
    <div>
        <h1>Filmes</h1>
        <a href="{{route('movies.create')}}">Cadastrar filme</a>
        <hr>
    </div>
    <table>
        <tr>
            <th>Título</th>
        </tr>
        @foreach($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td><a href="{{route('movies.edit', $movie->id)}}"><i class="fa-solid fa-pen"></i></a></td>
                <td><form action="{{route('movies.destroy', $movie->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar este filme?');"> @csrf @method('DELETE') <button type="submit"><i class="fa-regular fa-trash-can"></i></button></form></td>
                <td><a href="{{route('movies.show', $movie->id)}}"><i class="fa-regular fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>