<?php
// Função para validar a situação [cite: 30]
function calcularSituacao($nota) {
    if ($nota >= 7) return "Aprovado"; [cite: 19]
    if ($nota >= 5) return "Recuperação"; [cite: 20]
    return "Reprovado"; [cite: 21]
}

$notaAlunno = 6.5; // Exemplo de entrada
$situacao = calcularSituacao($notaAlunno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head><title>Atividade 1</title></head>
<body>
    <h1>Resultado Acadêmico</h1>
    <p>Nota: <strong><?= $notaAlunno ?></strong></p>
    <p>Situação: <strong><?= $situacao ?></strong></p>

    <h3>Progressão de Notas (0 até <?= $notaAlunno ?>):</h3>
    <ul>
        <?php for ($i = 0; $i <= $notaAlunno; $i++): ?> [cite: 29]
            <li>Ponto na escala: <?= $i ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>