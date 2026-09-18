<?php
// O PHP e a Sessão DEVEM ser iniciados na primeira linha do arquivo
session_start();

// Estoque restante, lido da sessão (não um valor fixo em HTML/JS)
$estoque = $_SESSION['estoque'] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Obrigado pela sua compra!</title>
  <link rel="stylesheet" href="css/status.css">
</head>
<body>
  <div>
    <h1>Obrigado pela sua compra! 🎉</h1>
    <p>Assim que o pagamento for confirmado, por favor envie um e-mail para <strong>contato@codigofonte.tv</strong> com seus dados para envio.</p>
    <p>Restam <?php echo $estoque; ?> unidades no estoque.</p>
    <a href="index.php"><button class="btn">Voltar para a Página Inicial</button></a>
  </div>
</body>
</html>
