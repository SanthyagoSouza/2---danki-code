<?php include('pages_protegidas.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH_PAINEL ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH; ?>path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="box-login">
        <?php
        if (isset($_POST['acao'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];

            $pdo = Mysql::conectar();
            $sql = $pdo->prepare("SELECT * FROM admin_usuario WHERE login = ? AND senha = ?");
            $sql->execute([$user, $password]);

            if ($sql->rowCount() == 1) {
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                header('Location: ' . INCLUDES_PATH_PAINEL);
                die();
            } else {
                echo '<div class="erro-box"><i class="fa fa-times"></i>Usuário ou senha incorretos.</div>';
            }
        }
        ?>
        <h2>Efetue o login</h2>
        <form method="post">
            <input type="text" name="user" placeholder="login.." required>
            <input type="text" name="password" placeholder="Senha.." required>
            <input type="submit" name="acao" value="Logar">
            <p><a href="">Recuperar Senha</a></p>
        </form>
    </div> <!-- box-login -->
</body>
</html>