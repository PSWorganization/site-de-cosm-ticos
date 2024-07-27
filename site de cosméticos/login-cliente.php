<?php
include_once("header.php");
?>
<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Por favor, preencha todos os campos.";
    } else {
        if ($email == "usuario@exemplo.com" && $password == "senha123") {
            header("Location: vendedor.php");
            exit();
        } else {
            $error = "E-mail ou senha inválidos.";
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
<div class="login-container">
        <h2>Login de Usuário</h2>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <div class="links">
            <a href="cadastro-cliente.php">Cadastro de Cliente</a>
            <a href="login-vendedor.php">Login de Vendedor</a>
        </div>
    </div>
</div>
</body>
</html>
<?php
include_once("footer.php");
?>