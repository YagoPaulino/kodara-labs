<h1>Cadastro</h1>
<a href="{{ route('login') }}">
    <button>Voltar</button>
</a>
<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" placeholder="Nome" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Senha" required>
    <br><br>

    <button type="submit">Cadastrar</button>
</form>

<br>

<a href="{{ route('login') }}">
    <button>Já tenho conta</button>
</a>