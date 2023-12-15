<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <h1>Information</h1>
    <nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('info')}}">Info</a>
    </nav>
    <div>
        <p>Nome Utente: {{$name . " " . $surname}}</p>
        <p>Data di nascita: {{$birthday}} </p>
        <p>Studi</p>
        <ul>
            <li>{{$school}}</li>
            <li>{{$university}}</li>
        </ul>
    </div>
</body>

</html>