<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <h2>Entrada de Dados dos Alunos</h2>
    <form action="exer1resposta.php" method="post">
        <?php
            for ($i = 0; $i < 3; $i++) {
                echo'<label>Digite o nome do aluno:</label><br>';
                echo'<input type="name" name="nome[]"><br>';
                echo'<label>Digite a nota do aluno: </label><br>';
                echo'<input type="number" name="nota[]"><br>';
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
