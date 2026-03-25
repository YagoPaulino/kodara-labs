<h1>Login</h1>

<a href="{{ route('hello') }}">
    <button>Voltar</button>
</a>
@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Senha" required>
    <br><br>

    <button type="submit">Entrar</button>
</form>

<br>

<a href="{{ route('register') }}">
    <button>Criar conta</button>
</a>