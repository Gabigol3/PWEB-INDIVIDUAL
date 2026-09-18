<?php
// O PHP e a Sessão DEVEM ser iniciados na primeira linha do arquivo
session_start();

// Usa o total de unidades definido na sessão (não um valor fixo no HTML)
$estoqueInicial = $_SESSION['estoque_inicial'] ?? 20;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produto Esgotado</title>
  <link rel="stylesheet" href="css/status.css">
</head>
<body>
  <div>
    <h1 class="erro">Produto Esgotado ❌</h1>
    <p>Todos os <?php echo $estoqueInicial; ?> bonés exclusivos já foram vendidos.<br> Fique ligado nas próximas edições e novidades do Código Fonte!</p>
    <a href="/"><button class="btn">Voltar para a Página Inicial</button></a>
  </div>
</body>
</html>
