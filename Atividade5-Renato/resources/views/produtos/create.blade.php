<h1>Cadastrar Produto</h1>
<form action="/produtos" method="POST">
    @csrf
    <label>Nome do Produto:</label>
    <input type="text" name="nome" required>
    <button type="submit">Enviar</button>
</form>
