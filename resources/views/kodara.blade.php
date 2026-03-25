<!DOCTYPE html>
<html>
<head>
    <title>Kodara Lab´s</title>
</head>
<body>

<a href="{{ route('login') }}">
    <button>Voltar</button>
</a>
<h1>Bem-vindo, {{ auth()->user()->name }}</h1>
</body>
</html>
