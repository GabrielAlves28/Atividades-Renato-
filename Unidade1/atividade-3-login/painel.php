<?php
session_start();
if (!isset($_SESSION['logado'])) { [cite: 52, 58]
    header("Location: login.php");
    exit();
}
echo "Bem-vindo à área restrita!";
echo '<br><a href="logout.php">Sair</a>'; [cite: 53]
?>