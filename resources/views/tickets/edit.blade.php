<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div>
        <h2>Editar ingresso</h2>
        <form action="{{route('tickets.update', $ticket->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="customer_name">Cliente:</label>
                <input type="text" name="customer_name" id="customer_name" value="{{ $ticket->customer_name }}" required>
            </div>
            <div>
                <label for="session_id">Nome da Sessão:</label>
                <select name="session_id" required>
                    @foreach($sessions as $session)
                        <option value="{{ $session->id }}" {{ $session->id == $ticket->session_id ? 'selected' : '' }}>
                        {{ $session->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="seat_number">Assento:</label>
                <input type="number" name="seat_number" id="seat_number" value="{{ $ticket->seat_number }}" required>
            </div>
            <div>
                <label for="purchase_date">Data da compra:</label>
                <input type="datetime-local" name="purchase_date" id="purchase_date" value="{{ $ticket->purchase_date }}" required>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>