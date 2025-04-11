<?php
$numeroSorteado = isset($_POST['numeroSorteado']) ? (int) $_POST['numeroSorteado'] : 0;
$tentativas = isset($_POST['tentativas']) ? (int) $_POST['tentativas'] + 1 : 1;
$palpite = isset($_POST['palpite']) ? (int) $_POST['palpite'] : 0;

if ($palpite == $numeroSorteado) {
    header("Location: resultado.php?numero=$numeroSorteado&tentativas=$tentativas");
    exit;
}

$dica = $palpite < $numeroSorteado ? "maior" : "menor";
?>

<p>Errou! O numero e <strong><?= $dica ?></strong> que <?= $palpite ?>.</p>

<form action="jogo.php" method="post">
    <input type="hidden" name="numeroSorteado" value="<?= $numeroSorteado ?>">
    <input type="hidden" name="tentativas" value="<?= $tentativas ?>">
    
    <label>Tente novamente:</label>
    <input type="number" name="palpite" required>
    <button type="submit">Enviar</button>
</form>
