<?php

$base = rand(0, 100);
$tentativas = 0;
$numerosGerados = [];

do {
    $aleatorio = rand(0, 100);
    $numerosGerados[] = $aleatorio;
    $tentativas++;
} while ($aleatorio !== $base);


echo "<h2>Resultado da Adivinhação</h2>";
echo "<p>Número base: $base</p>";
echo "<p>Total de tentativas até acertar: $tentativas</p>";
echo "<p>Números gerados:</p>";
echo "<ul>";

foreach ($numerosGerados as $numero) {
    echo "<li>$numero</li>";
}
echo "</ul>";
?>
