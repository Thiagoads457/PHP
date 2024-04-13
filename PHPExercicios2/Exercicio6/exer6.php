<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <h2>Calculadora de Produtos</h2>
    <form action="exer6resposta.php" method="post">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <label for="produto<?= $i ?>">Produto <?= $i ?>:</label>
            <input type="text" id="produto<?= $i ?>" name="produtos[]" required>
            <label for="preco<?= $i ?>">Preço (R$):</label>
            <input type="number" id="preco<?= $i ?>" name="precos[]" step="0.01" required><br>
        <?php } ?>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
