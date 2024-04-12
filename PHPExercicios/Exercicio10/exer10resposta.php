    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        
        $imc = $peso / ($altura ** 2);

        echo "Seu IMC é: " . round($imc, 2) . "<br>";

        
        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "Seu peso está normal.";
        } elseif ($imc >= 24.9 && $imc < 29.9) {
            echo "Você está com sobrepeso.";
        } else {
            echo "Você está obeso.";
        }
    ?>
    
    



    
   

