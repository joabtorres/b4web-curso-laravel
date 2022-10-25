<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
</head>

<body>
    @foreach ($pessoas as $index)
        @component('componentes.pessoa')
            @slot('imagem')
                {{ $index['imagem'] }}
            @endslot
            @slot('nome')
                {{ $index['nome'] }}
            @endslot
            @slot('idade')
                {{ $index['idade'] }}
            @endslot
            @slot('nascimento')
                {{ $index['nascimento'] }}
            @endslot
        @endcomponent
    @endforeach
</body>

</html>
