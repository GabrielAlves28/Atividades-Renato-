Nome: Gabriel Alves de Sales

1.	Criar variáveis e imprimir tipos.

<?php
$inteiro = 25;
$decimal = 10.5;
$texto = “Olá, ADS!”;
$booleano = true;
$nulo = null;

Var_dump($inteiro, $decimal, $texto, $booleano, $nulo);
?>

2.	 Interpolação vs. Concatenação.

<?php
$nome = “Gabriel”;
Echo “Olá, meu nome é $nome.\n”;
Echo “Olá, meu nome é “ . $nome . “.\n”;
?>

3.	Diferença entre aspas simples e duplas.

<?php
$valor = 100;
Echo “Com aspas duplas: O valor é $valor\n”; 
Echo ‘Com aspas simples: O valor é $valor\n’; 
?>

4.	Conversão de tipos.

<?php
$stringNum = “42.5”;
$int = (int)$stringNum;
$float = (float)$stringNum;
$bool = (bool)$stringNum;

Var_dump($int, $float, $bool);
?>

5.	Operadores aritméticos.

<?php
$a = 10; $b = 3;
Echo “Soma: “ . ($a + $b) . “\n”;
Echo “Subtração: “ . ($a - $b) . “\n”;
Echo “Multiplicação: “ . ($a * $b) . “\n”;
Echo “Divisão: “ . ($a / $b) . “\n”;
Echo “Módulo: “ . ($a % $b) . “\n”;
?>

6.	Comparações (== vs ===).

<?php
$num = 10; $str = “10”;
Var_dump($num == $str);  
Var_dump($num === $str); 
Var_dump($num != $str);  
Var_dump($num !== $str); 
?>

7.	Operadores lógicos.

<?php
$temCelta = true;
$temXRE = true;
Var_dump($temCelta && $temXRE);
Var_dump($temCelta || false);   
Var_dump(!$temCelta);           
?>

8.	Constantes e Cálculo.

<?php
Define(“PI”, 3.1415);
$raio = 5;
$area = PI * ($raio ** 2);
Echo “Área do círculo: $area”;
?>

9 e 10. Arrays (Indexados e Associativos).

<?php
$nomes = [“Mario”, “Leticia”, “Richard”];
Echo $nomes[1] . “\n”; 


$pessoa = [
    “nome” => “Gabriel”,
    “curso” => “ADS”,
    “campus” => “Boa Viagem”
];
Echo “Estudante: “ . $pessoa[‘nome’];
?>

11.	Array Multidimensional.

<?php
$alunos = [
    ["nome" => "Samela", "nota" => 9.5],
    ["nome" => "Kaique", "nota" => 8.0]
];
echo "Nota da Samela: " . $alunos[0]['nota'];
?>

12. Manipulação de Strings.

<?php
$frase = "PHP é legal";
echo strtoupper($frase) . "\n";
echo strtolower($frase) . "\n";
echo strlen($frase) . "\n";
echo str_replace("legal", "poderoso", $frase);
?>

13 e 14. Escopo e Variável Estática

<?php
$globalVar = "Sou global";

function testeEscopo() {
    static $contador = 0; 
    $contador++;
    echo "Chamada: $contador\n";
}
testeEscopo(); testeEscopo();
?>

15. Uso de Objetos (Classes).

<?php
class Carro {
    public $modelo;
    public function __construct($m) { $this->modelo = $m; }
}
$meuCarro = new Carro("Celta");
echo "Carro: " . $meuCarro->modelo;
?>

16 e 17. Operações Extras e Conversão Explícita.

<?php
$x = 5;
echo ++$x . "\n"; 

$ativo = true;
echo (int)$ativo . "\n";    
echo (string)$ativo . "\n"; 
echo (float)$ativo . "\n";  
?>

18 e 19. Funções de Verificação e Comparações.

<?php
$v = "";
var_dump(isset($v)); 
var_dump(empty($v)); 

$n1 = 20; $n2 = 15;
var_dump($n1 > $n2);
var_dump($n1 <= $n2);
?>

20. Criar variáveis para dados pessoais e exibir uma frase utilizando a técnica de interpolação (aspas duplas).

<?php
// Declaração das variáveis com dados pessoais
$nome = "Gabriel";
$idade = 20; // Altere para sua idade real
$curso = "Análise e Desenvolvimento de Sistemas";
$instituicao = "IFCE";

// Exibição da frase usando INTERPOLAÇÃO (variáveis dentro de aspas duplas)
echo "Olá! Meu nome é $nome, tenho $idade anos e sou aluno do curso de $curso no $instituicao.";
?>

21. Criar um formulário para uma Agenda Estudantil que receba dados pessoais e compromissos, processando-os no mesmo script.

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 21 - Agenda Estudantil</title>
</head>
<body>
    <h2>📅 Agenda Estudantil</h2>
    
    
    <form method="POST" action="">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Compromisso do Dia:</label><br>
        <textarea name="compromisso" rows="4" cols="30" required></textarea><br><br>

        <input type="submit" value="Cadastrar na Agenda">
    </form>

    <hr>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $compromisso = $_POST['compromisso'];

        echo "<h3>Compromisso Agendado:</h3>";
        echo "<strong>Estudante:</strong> $nome <br>";
        echo "<strong>Contato:</strong> $email <br>";
        echo "<strong>Idade:</strong> $idade anos <br>";
        echo "<strong>Tarefa:</strong> $compromisso";
    }
    ?>
</body>
</html>

 

 




