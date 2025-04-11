<?php
 {
    $valor = (int) $_POST['valor'];

 
    $cedulas = [100, 50, 20, 10, 5, 2, 1];

    echo "<h2>Resultado:</h2>";
    echo "<p>Valor digitado: R$" . $valor . ",00</p>";

    $i = 0;

    while ($i < count($cedulas)) {
        $nota = $cedulas[$i];
        $quantidade = (int) ($valor / $nota); 
        $valor = $valor % $nota;

        echo "Notas de R$$nota,00: $quantidade<br>";

        $i++;
    }
}
?>
