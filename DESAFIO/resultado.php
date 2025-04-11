<?php
$numero = isset($_GET['numero']) ? (int) $_GET['numero'] : 0;
$tentativas = isset($_GET['tentativas']) ? (int) $_GET['tentativas'] : 0;
?>

<h2>Parabens! Voce acertou!</h2>
<p>Numero sorteado: <?= $numero ?></p>
<p>Total de tentativas: <?= $tentativas ?></p>

<a href="index.php">Jogar novamente</a>
