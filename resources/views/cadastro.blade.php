
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="tel" name="celular" placeholder="Celular" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="password" name="senha_confirmation" placeholder="Confirmação de Senha" required>
    <button type="submit">Cadastrar</button>
</form>
