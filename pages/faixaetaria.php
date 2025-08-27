<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = (int) $_POST['idade'];
 
    // Determinando faixa etária
    if ($idade < 12) {
        $faixa = "Criança";
    } elseif ($idade >= 12 && $idade < 18) {
        $faixa = "Adolescente";
    } elseif ($idade >= 18 && $idade <= 25) {
        $faixa = "Jovem";
    } elseif ($idade >= 26 && $idade <= 60) {
        $faixa = "Adulto";
    } else {
        $faixa = "Melhor idade";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Resultado</h2>
        <div class="resultado">
            <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
            <p><strong>Idade:</strong> <?= $idade ?> anos</p>
            <p><strong>Faixa Etária:</strong> <?= $faixa ?></p>
        </div>
 
        <?php if ($idade >= 18): ?>
            <div class="resultado success">
                <strong>Bem-vindo, <?= htmlspecialchars($nome) ?>!</strong>
            </div>
        <?php else: ?>
            <div class="resultado error">
                <strong>Acesso Negado! Apenas maior de 18 pode ingressar!</strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>