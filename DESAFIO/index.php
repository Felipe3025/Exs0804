<?php
$numeroSorteado = rand(1, 100);
$tentativas = 0;
?>

<h2>Adivinhe o numero da sorte (entre 1 e 100)</h2>

<form action="jogo.php" method="post">
    <input type="hidden" name="numeroSorteado" value="<?= htmlspecialchars($numeroSorteado) ?>">
    <input type="hidden" name="tentativas" value="<?= htmlspecialchars($tentativas) ?>">

    <label>Seu palpite:</label>
    <input type="number" name="palpite" min="1" max="100" required>

    <button type="submit">Enviar</button>
</form>

