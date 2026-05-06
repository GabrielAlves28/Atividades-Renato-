<?php
session_start();

// 1. Função para validação de dados [cite: 75]
function validarEntrada($dado) {
    return htmlspecialchars(trim($dado));
}

// 2. Lógica de Login [cite: 48, 71]
if (isset($_POST['login'])) {
    if ($_POST['user'] === 'admin' && $_POST['pass'] === '1234') {
        $_SESSION['logado'] = true;
    } else {
        $erro_login = "Credenciais inválidas!";
    }
}

// 3. Lógica de Logout [cite: 53]
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// 4. Cadastro de Alunos (Armazenamento em Array na Sessão) [cite: 72, 73]
if (isset($_POST['cadastrar']) && isset($_SESSION['logado'])) {
    $novo_aluno = [
        'nome'  => validarEntrada($_POST['nome']),
        'email' => validarEntrada($_POST['email']),
        'curso' => validarEntrada($_POST['curso'])
    ];
    
    // Adiciona ao array temporário na sessão
    $_SESSION['lista_alunos'][] = $novo_aluno;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio Integrador - Unidade 1</title>
    <style>
        body { font-family: sans-serif; margin: 20px; line-height: 1.6; }
        .container { max-width: 600px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        .erro { color: red; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<div class="container">
    <?php if (!isset($_SESSION['logado'])): ?>
        <h2>Login - Área Restrita</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="Usuário (admin)" required><br><br>
            <input type="password" name="pass" placeholder="Senha (1234)" required><br><br>
            <button type="submit" name="login">Entrar</button>
        </form>
        <?php if (isset($erro_login)) echo "<p class='erro'>$erro_login</p>"; ?>

    <?php else: ?>
        <h2>Painel de Cadastro <a href="?logout=1" style="font-size: 12px; color: red;">(Sair)</a></h2>
        
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" required><br><br>
            <input type="email" name="email" placeholder="E-mail" required><br><br>
            <input type="text" name="curso" placeholder="Curso" required><br><br>
            <button type="submit" name="cadastrar">Cadastrar Aluno</button>
        </form>

        [cite_start]<h3>Registros Cadastrados [cite: 74]</h3>
        <table>
            <tr><th>Nome</th><th>E-mail</th><th>Curso</th></tr>
            <?php if (isset($_SESSION['lista_alunos'])): ?>
                <?php foreach ($_SESSION['lista_alunos'] as $aluno): ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['email'] ?></td>
                        <td><?= $aluno['curso'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="3">Nenhum registro encontrado.</td></tr>
            <?php endif; ?>
        </table>
    <?php endif; ?>
</div>

</body>
</html>