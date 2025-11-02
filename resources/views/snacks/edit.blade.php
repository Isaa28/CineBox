<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div>
        <h2>Editar lanche</h2>
        <form action="{{route('snacks.update', $snack->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ $snack->name }}" required>
            </div>
            <div>
                <label for="type">Tipo:</label>
                <input type="text" name="type" id="type" value="{{ $snack->type }}" required>
            </div>
            <div>
                <label for="price">Preço:</label>
                <input type="number" name="price" step="0.01" id="price" value="{{ $snack->price }}" required>
            </div>
            <div>
                <label for="stock_quantity">Estoque:</label>
                <input type="number" name="stock_quantity" id="stock_quantity" value="{{ $snack->stock_quantity }}" required>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>