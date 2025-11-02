<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$ticket->customer_name}}</title>
</head>
<body>
    <div>
        <h1>{{$ticket->customer_name}}</h1>
        <h3>Sessão</h3>
        <p>{{$ticket->session->session_id}}</p>
        <h3>Assento</h3>
        <p>{{$ticket->seat_number}}</p>
        <h3>Data da compra</h3>
        <p>{{ \Carbon\Carbon::parse($ticket->purchase_date)->format('d/m/Y H:i') }}</p>
        <a href="{{ route('tickets.index') }}">Voltar</a>
    </div>
</body>
</html>