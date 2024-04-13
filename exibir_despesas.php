<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Exibição de Dados</h1>

        <?php
        if (isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['uf']) && isset($_POST['cpf']) && isset($_POST['valor_despesas']) && isset($_POST['descricao'])) {
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $uf = $_POST['uf'];
            $cpf = $_POST['cpf'];
            $valor_despesas = $_POST['valor_despesas'];
            $descricao = $_POST['descricao'];
            $aumento = $valor_despesas * 0.1;
            $total = $valor_despesas + $aumento;
            echo "<p><strong>Código:</strong> $codigo</p>";
            echo "<p><strong>Nome do Cliente:</strong> $nome</p>";
            echo "<p><strong>UF:</strong> $uf</p>";
            echo "<p><strong>CPF:</strong> $cpf</p>";
            echo "<p><strong>Valor de Despesas:</strong> R$ $valor_despesas</p>";
            echo "<p><strong>Descrição:</strong> $descricao</p>";
            echo "<p><strong>Total do Aumento:</strong> R$ $aumento</p>";
            echo "<p><strong>Total Final:</strong> R$ $total</p>";
        } else {
            
            echo "<p>Por favor, preencha todos os campos do formulário.</p>";
        }
        ?>
    </div>
</body>
</html>
