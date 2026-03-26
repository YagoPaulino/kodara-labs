<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodara</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body>
    <h1>Página Inicial</h1>

<a href="{{ route('login') }}">
    <button>Login</button>
</a>

</body>
</html>