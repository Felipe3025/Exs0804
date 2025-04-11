<?php
 {
    $numero = (int) $_POST['numero'];
    $contador = 0;

    echo "<h2>Subtração aleatória</h2>";
    echo "<p>Valor inicial: $numero</p>";
    echo "<ul>";

    while ($numero > 0) {
        $aleatorio = rand(1, 10);
        $numero -= $aleatorio;
        $contador++;

        echo "<li>Subtraindo $aleatorio → Novo valor: " . ($numero < 0 ? 0 : $numero) . "</li>";
    }

    echo "</ul>";
    echo "<p>Total de subtrações até chegar a zero ou menos: $contador</p>";
} 
?>
