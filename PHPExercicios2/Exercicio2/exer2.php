<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="exer2resposta.php" method="post">
        <?php
        for ($i = 1; $i <= 4; $i++) {
            echo "<label>Digite o número $i:</label>";
            echo "<input type='number' name='numeros[]' required><br>";
        }
        ?>
        <button type="submit">Analisar</button>
    </form>
</body>
</html>
