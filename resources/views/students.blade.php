<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>
    <h1>Lista studenti</h1>
    {{-- @if (count($lista_studenti) > 0)
        <ul>
            @foreach ($lista_studenti as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>
    @else
        <p>non ci sono studenti</p>
    @endif --}}



    {{-- @forelse($lista_studenti as $student)
        <p> {{ $student }}</p>
    @empty
        <p>non ci sono studenti</p>
    @endforelse --}}

    <p>
        @foreach ($lista_studenti as $student)
            {{ $student }} @if (!$loop->last), @endif
        @endforeach
    </p>

</body>

</html>
