<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$snack->name}}</title>
</head>
<body>
    <div>
        <h1>{{$snack->name}}</h1>
        <h3>Tipo</h3>
        <p>{{$snack->type}}</p>
        <h3>Preço</h3>
        <p>R$ {{ number_format($snack->price, 2, ',', '.') }}</p>
        <h3>Estoque</h3>
        <p>{{$snack->stock_quantity}}</p>
        <a href="{{ route('snacks.index') }}">Voltar</a>
    </div>
</body>
</html>