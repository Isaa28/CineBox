<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Lanche</title>
</head>
<body>
    <div>
        <h2>Cadastrar Lanche</h2>
        <form action="{{ route('snacks.store') }}" method="post">
            @csrf
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="type">Tipo:</label>
                <input type="text" name="type" id="type" required>
            </div>
            <div>
                <label for="price">Preço:</label>
                <input type="number" name="price" id="price" step="0.01" required>
            </div>
            <div>
                <label for="stock_quantity">Estoque:</label>
                <input type="number" name="stock_quantity" id="stock_quantity" required>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>