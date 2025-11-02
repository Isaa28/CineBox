<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
    <title>CineBox-Lanches</title>
</head>
<body>
    <div>
        <h1>Lanches</h1>
        <a href="{{route('snacks.create')}}">Cadastrar ingresso</a>

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
        @foreach($snacks as $snack)
            <tr>
                <td>{{$snack->name}}</td>
                <td><a href="{{route('snacks.edit', $snack->id)}}"><i class="fa-solid fa-pen"></i></a></td>
                <td><form action="{{route('snacks.destroy', $snack->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar este lanche?');"> @csrf @method('DELETE') <button type="submit"><i class="fa-regular fa-trash-can"></i></button></form></td>
                <td><a href="{{route('snacks.show', $snack->id)}}"><i class="fa-regular fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>