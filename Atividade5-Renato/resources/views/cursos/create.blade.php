<h1>Cadastro de Curso</h1>
<form action="/cursos" method="POST">
    @csrf
    <label>Nome do Curso:</label>
    <input type="text" name="nome" required>
    <button type="submit">Salvar</button>
</form>