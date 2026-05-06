<?php
$erro = "";
$sucesso = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") { [cite: 41]
    // Verifica se campos estão vazios [cite: 42]
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['curso']) || empty($_POST['turno'])) {
        $erro = "Todos os campos são obrigatórios!"; [cite: 45]
    } else {
        $sucesso = true;
    }
}
?>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome"> [cite: 36]
    <input type="email" name="email" placeholder="E-mail"> [cite: 37]
    <input type="text" name="curso" placeholder="Curso"> [cite: 38]
    <select name="turno"> [cite: 39]
        <option value="">Turno</option>
        <option value="Noturno">Noturno</option>
    </select>
    <button type="submit">Cadastrar</button>
</form>

<?php if ($erro): ?>
    <p style="color:red;"><?= $erro ?></p>
<?php elseif ($sucesso): ?> [cite: 43]
    <h3>Dados Cadastrados:</h3> [cite: 44]
    <p>Nome: <?= htmlspecialchars($_POST['nome']) ?></p>
    <p>E-mail: <?= htmlspecialchars($_POST['email']) ?></p>
<?php endif; ?>