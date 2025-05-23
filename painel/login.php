<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH_PAINEL ?>css/style.css">
</head>

<body>
    <div class="box-login">
        <h2>Efetue o login</h2>
        <form method="post">
            <input type="text" name="user" placeholder="login.." required>
            <input type="text" name="password" placeholder="Senha.."required>
            <input type="submit" name="acao" value="Logar">
        </form>
    </div> <!-- box-login -->
</body>

</html>