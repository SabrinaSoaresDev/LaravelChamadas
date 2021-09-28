<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de clientes</title>
</head>
<body>
    <h1>Clientes</h1>

    <a href="{{ route('clients.create') }}">Criar cliente</a>

    <ul>
        @foreach ($clients as $client)
            <li>
                <a href="{{ route('clients.show', $client) }}">Visualizar</a>

                {{ $client }}
            </li>
        @endforeach
    </ul>
</body>
</html>
