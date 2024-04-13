<?php
$nomes = $_POST['nome'];
$notas = $_POST['nota'];
$media = array_sum($notas) / count($notas);

$maior_nota = max($notas);
$indice_maior_nota = array_search($maior_nota, $notas);
$aluno_maior_nota = $nomes[$indice_maior_nota];

echo "A média da classe é: $media <br>";
echo "O aluno com a maior nota é: $aluno_maior_nota, com nota: $maior_nota";
?>


