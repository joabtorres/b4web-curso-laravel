<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>

<body>
    <h1>Bem Vindo, {{ $apelido_nome }}.</h1>
    <h2>1+1 é: {{ 1 + 1 }}</h2>
    <h3> O Código é: {{-- funcao() --}} </h3>
    <p> Código HTML: {{ $html }}</p>
    <p> Código HTML Interpretado: {!! $html !!}</p>

    {{-- estrutura de condições --}}
    <h3> {{ $apelido_nome == 'Jorge' ? 'Sim' : 'Não' }}</h3>

    @if ($apelido_nome == 'Joab')
        <h2> é Joab </h2>
    @elseif ($apelido == 'Jorge')
        <h2> é Jorge</h2>
    @else
        <h2> Não</h2>
    @endif

    {{-- laços de repetição --}}

    @for ($i = 0; $i < 10; $i++)
        <p> o valor de I é: {{ $i }}</p>
    @endfor

    @foreach ($ingredientes as $index)
        <p>
            {{ $index }}
            -
            {{-- utilizando componentes --}}
            @component('componentes.botao')
                @slot('href')
                    http://google.com.br
                @endslot
                @slot('cor')
                    blue
                @endslot
                Editar
            @endcomponent
            @component('componentes.botao')
                @slot('href')
                    http://9gag.com
                @endslot
                @slot('cor')
                    red
                @endslot
                Deletar
            @endcomponent
        </p>
    @endforeach


</body>

</html>
