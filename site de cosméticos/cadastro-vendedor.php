<?php
include_once("header.php");
?>

<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($phone) || empty($cpf) || empty($cnpj) || empty($password) || empty($confirm_password)) {
        $error = "Por favor, preencha todos os campos.";
    } elseif ($password !== $confirm_password) {
        $error = "A senha e a confirmação não correspondem.";
    } else {
        // Aqui você pode adicionar a lógica para armazenar os dados do usuário em um banco de dados
        // Por exemplo, você pode usar PDO ou MySQLi para inserir os dados em uma tabela de usuários.
        // O exemplo abaixo apenas simula o sucesso do cadastro.
        
        // Redirecionar ou exibir mensagem de sucesso
        header("Location: cadastro_sucesso.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendedor</title>
    <link rel="stylesheet" href="floralbeauty.css ">
</head>
<body>
<div class="login-cadastro-container">
    <div class="anuncio">
        <img src="anuncio.jpg" alt="Anúncio">
    </div>
    <div class="cadastro-container login-container">
        <h2>Cadastro de Vendedor</h2>
        <form action="" method="POST">
            
            <input type="text" name="name" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
        
        <div>
            <input type="text" name="telefone" placeholder="Telefone" pattern="\d{2}[\s-]?\d{5}[\s-]?\d{4}" title="Formato: 12-34567-8900" required> 
            <input type="text" name="cpf" placeholder="CPF (somente números)" required pattern="\d{11}" title="Digite um CPF válido com 11 dígitos">            
            </div>
            <div>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="password" name="confirm_password" placeholder="Confirmar Senha" required>
        </div>
            <button type="submit">Cadastrar</button>
        </form>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <div class="links">
            <a href="login-cliente.php">Login de Usuário</a>
            <a href="login-vendedor.php">Login de Vendedor</a>
        </div>
    </div>
</div>
</body>
</html>
<?php
include_once("footer.php");
?>