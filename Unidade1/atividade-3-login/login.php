<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['user'] === 'admin' && $_POST['pass'] === '1234') { [cite: 49, 50]
        $_SESSION['logado'] = true; [cite: 51]
        header("Location: painel.php"); [cite: 57]
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
?>
<form method="POST">
    <input type="text" name="user" placeholder="Usuário">
    <input type="password" name="pass" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>