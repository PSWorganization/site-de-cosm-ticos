<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="floralbeauty.css">
</head>
<body>

    <div class="login-cadastro-container">
       
        <div class="registro-container">
            <h2>Cadastre-se e compre!</h2>
            <form action="processar_cadastro.php" method="POST" class="registro-container">
                    <input type="text" name="nome" placeholder="Nome Completo" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                 <div>
                    <input type="text" name="telefone" placeholder="Telefone" pattern="\d{3}[\s-]?\d{3}[\s-]?\d{4}" title="Formato: 123-456-7890" required>
                    <input type="text" name="cpf" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato: 123.456.789-00" required>
                </div>
                <div>
                    <input type="password" name="senha" placeholder="Senha" minlength="6" required>
                 <input type="password" name="confirmar_senha" placeholder="Confirme a Senha" minlength="6" required>
                </div>
                
                <button id="cadastro-btn" type="submit">Cadastrar</button>
            </form>
            <div class="links">
             <a href="login-cliente.php">Login de Cliente</a>
            <a href="login-vendedor.php">Login de Vendedor</a>
        </div>
        </div>
        <div class="anuncio">
        <img src="anuncioo.jpg" alt="Anúncio">
    </div>
    </div>
    
</body>
</html>
<?php
include_once("footer.php");
?>
