<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Ingressos</title>
</head>
<body>
    <div>
        <h2>Cadastrar Ingressos</h2>
        <form action="{{ route('tickets.store') }}" method="post">
            @csrf
            <div>
                <label for="customer_name">Cliente:</label>
                <input type="text" name="customer_name" id="customer_name" required>
            </div>
            <div>
                <label for="session_id">Nome da Sessão:</label>
                <select name="session_id" id="session_id" required>
                    <option value="">Selecione uma sessão</option>
                    @foreach($sessions as $session)
                        <option value="{{ $session->id }}">{{ $session->name }} - {{ \Carbon\Carbon::parse($session->date_time)->format('d/m/Y H:i') }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="seat_number">Assento:</label>
                <input type="number" name="seat_number" id="seat_number" required>
            </div>
            <div>
                <label for="purchase_date">Data da compra:</label>
                <input type="datetime-local" name="purchase_date" id="purchase_date" required>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>