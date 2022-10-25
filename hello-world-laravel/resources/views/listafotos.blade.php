<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista 50 fotos</title>
</head>

<body>
    @for ($i = 1; $i <= 50; $i++)
        <img src="{{ current(explode('=', $url)) . '=' . $i }}" />
    @endfor
</body>

</html>
