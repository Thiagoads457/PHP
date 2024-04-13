    <h2>Resultado</h2>
    <?php
    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];

    $inferior50 = 0;
    $entre50e100 = array();
    $somaSuperior100 = 0;
    $countSuperior100 = 0;

    for ($i = 0; $i < count($produtos); $i++) {
        $produto = $produtos[$i];
        $preco = $precos[$i];

        if ($preco < 50) {
            $inferior50++;
        } elseif ($preco >= 50 && $preco <= 100) {
            $entre50e100[] = $produto;
        } elseif ($preco > 100) {
            $somaSuperior100 += $preco;
            $countSuperior100++;
        }
    }

    $mediaSuperior100 = $countSuperior100 > 0 ? $somaSuperior100 / $countSuperior100 : 0;

    // Exibe os resultados
    echo "<p>Quantidade de produtos com preço inferior a R$50,00: $inferior50</p>";
    echo "<p>Nomes dos produtos com preço entre R$50,00 e R$100,00: ";
    if (count($entre50e100) > 0) {
        echo implode(", ", $entre50e100);
    } else {
        echo "Nenhum";
    }
    echo "</p>";
    echo "<p>Média dos preços dos produtos com preço superior a R$100,00: R$" . number_format($mediaSuperior100, 2) . "</p>";
    ?>
</body>
</html>
