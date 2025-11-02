<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
    <title>CineBox-Salas</title>
</head>
<body>
    <div>
        <h1>Salas</h1>
        <a href="{{route('rooms.create')}}">Cadastrar filme</a>

        @if (session()->has('sucesso'))
            <p>{{ session()->get('sucesso')}}</p>
        @elseif (session()->has('erro'))
            <p>{{ session()->get('erro')}}</p>
        @else
            <p> </p>
        @endif

        <hr>
    </div>
    <table>
        <tr>
            <th>Nome</th>
        </tr>
        @foreach($rooms as $room)
            <tr>
                <td>{{$room->name}}</td>
                <td><a href="{{route('rooms.edit', $room->id)}}"><i class="fa-solid fa-pen"></i></a></td>
                <td><form action="{{route('rooms.destroy', $room->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar está sala? Ao deletar essa sala as sessões relacionadas seram apagadas.');"> @csrf @method('DELETE') <button type="submit"><i class="fa-regular fa-trash-can"></i></button></form></td>
                <td><a href="{{route('rooms.show', $room->id)}}"><i class="fa-regular fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>