<?php
include_once("header.php");
?>
<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cnpj = $_POST['cnpj'];
    $password = $_POST['password'];

    if (empty($cnpj) || empty($password)) {
        $error = "Por favor, preencha todos os campos.";
    } else {
        if ($cnpj == "12345678000195" && $password == "senha123") {
            header("Location: vendedor.php");
            exit();
        } else {
            $error = "CNPJ ou senha inválidos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="floralbeauty.css">
</head>
<body>
    <div class="login-cadastro-container">
<div class="registro-container">
        <h2>Login de vendedor</h2>
        <form action="" method="POST">
        <input type="text" name="cnpj" placeholder="CNPJ (somente números)" required pattern="\d{14}" title="Digite um CNPJ válido com 14 dígitos">
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <div class="links">
            <a href="login-cliente.php">Login de Cliente</a>
            <a href="cadastro-vendedor.php">Cadastro de Vendedor</a>
        </div>
    </div>
</div>
</body>
</html>
<?php
include_once("footer.php");
?>