<!DOCTYPE html>
<html>
<head>
    <title>Kodara Lab´s</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body>

<a href="{{ route('login') }}">
    <button>Voltar</button>
</a>
<h1>Bem-vindo, {{ auth()->user()->name }}</h1>
</body>
</html>
