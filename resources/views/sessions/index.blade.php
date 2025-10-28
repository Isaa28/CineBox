<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
    <title>CineBox-Sessões</title>
</head>
<body>
    <div>
        <h1>Sessões</h1>
        <a href="{{route('sessions.create')}}">Cadastrar sessão</a>

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
        @foreach($sessions as $session)
            <tr>
                <td>{{$session->name}}</td>
                <td><a href="{{route('sessions.edit', $session->id)}}"><i class="fa-solid fa-pen"></i></a></td>
                <td><form action="{{route('sessions.destroy', $session->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar está sessão?');"> @csrf @method('DELETE') <button type="submit"><i class="fa-regular fa-trash-can"></i></button></form></td>
                <td><a href="{{route('sessions.show', $session->id)}}"><i class="fa-regular fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>