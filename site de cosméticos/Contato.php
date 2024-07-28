<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contate-nos</title>
    <link rel="stylesheet" href="floralbeauty.css">
</head>
<body>
<div class="login-cadastro-container">
        <div class="registro-container">
            <h2>Entre em Contato Conosco</h2>
            <form action="processar_contato.php" method="POST" class="registro-form">
                <input type="email" name="email" placeholder="Seu E-mail" required>
                <input type="text" name="assunto" placeholder="Assunto" required>
                <textarea name="mensagem" placeholder="Sua Mensagem" rows="5" required></textarea>
                <button id="contato-btn" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
include_once("footer.php");
?>
