<?php
if (isset($_POST['nome_usuario'])) {
    // Define o cookie por 7 dias [cite: 64, 66]
    setcookie("visitante", $_POST['nome_usuario'], time() + (7 * 24 * 60 * 60));
    header("Refresh:0");
}

$nome = $_COOKIE['visitante'] ?? null; [cite: 68]
?>

<?php if ($nome): ?>
    <h1>Bem-vindo de volta, <?= htmlspecialchars($nome) ?>!</h1> [cite: 67]
<?php else: ?> [cite: 65]
    <form method="POST">
        <input type="text" name="nome_usuario" placeholder="Seu nome" required>
        <button type="submit">Salvar</button>
    </form>
<?php endif; ?>