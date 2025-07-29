<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    echo "<h2>Tipos primitivos escalares</h2>";

    echo "<h3>String</h3>";
    $v = "Gustavo";
    echo "<p>" . var_dump($v) . "</p>";

    echo "<h3>Int</h3>";
    // 0x = hexadecimal 0b = binário 0 = octal
    $num = 010;
    echo "<p>" . var_dump($num) . "</p>";
    $num = (int) 3e2; // 3 x 10^2 coerção
    echo "<p>" . var_dump($num) . "</p>";
    $num = 0b101;
    echo "<p>" . var_dump($num) . "</p>";
    $num = 0x1A;
    echo "<p>" . var_dump($num) . "</p>";

    echo "<h3>Float/Double</h3>";
    $num = 3e2;
    echo "<p>O valor é $num</p>";
    echo "<p>" . var_dump($num) . "</p>";
    $num = (float) "950";
    echo "<p>" . var_dump($num) . "</p>";

    echo "<h3>Bool</h3>";
    $casado = true;
    echo "<p>" . var_dump($casado) . "</p>";
    print "<p>O valor para casado é $casado</p>";

    echo "<h2>Tipos primitivos compostos</h2>";

    echo "<h3>Array</h3>";
    $vet = [6, 2.5, "Maria", 3, false];
    echo "<p>" . var_dump($vet) . "</p>";

    echo "<h3>Object</h3>";
    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa;
    echo "<p>" . var_dump($p) . "</p>";
    ?>

</body>

</html>