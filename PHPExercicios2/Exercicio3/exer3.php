<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h2>Digite 10 valores numéricos: </h2>
    <form action="exer3resposta.php" method="post">
        <?php 
            for ($i=0;$i<3;$i++) {
                echo '<input type="number" name="numeros[]"><br>';
            }
            echo '<label>Digite um número multiplicador: </label>&nbsp;
                <input type="number" name="multiplica">';
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>