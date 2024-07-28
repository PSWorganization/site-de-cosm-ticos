<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="floralbeauty.css">
</head>
<body>

    <div class="login-cadastro-container">
        <div class="registro-container catalogar">
            <h2>Cadastre seu produto!</h2>
            <form action="processar_cadastro.php" method="POST" enctype="multipart/form-data" class="registro-form">
                <input type="text" name="nome_produto" placeholder="Nome do Produto" required>
                <input type="number" step="0.01" name="preco" placeholder="Preço" required>
                
                <!-- Estilização customizada para o input de arquivo -->
                <label for="imagem" class="file-upload-label">Escolher Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required hidden>
                
                <select name="categoria" required>
                    <option value="" disabled selected>Escolha a Categoria do Produto:</option>
                    <option value="perfumes">Perfumes</option>
                    <option value="cuidado_para_pele">Cuidado para a Pele</option>
                    <option value="maquiagens">Maquiagens</option>
                    <option value="higiene">Higiene</option>
                    <option value="produtos_infantis">Produtos Infantis</option>
                </select>
                <button id="cadastro-btn" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    
</body>
</html>
<?php
include_once("footer.php");
?>
