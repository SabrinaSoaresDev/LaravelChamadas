<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar o cliente {{ $client->name }}</h1>

    <a href="{{ route('clients.show', $client)}}">Voltar</a>

    <form>
        {{-- TODO --}}
    </form>
</body>
</html>
