<?php
include('pages_protegidas.php');
include('../classes/Usuario.php');

if (isset($_GET['loggout'])) {
    Painel::loggout();

}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH_PAINEL ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH; ?>path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="menu">
        <div class="box-usuario">

            <?php if (!empty($_SESSION['img'])) { ?>

                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDES_PATH_PAINEL ?>uploads/<?php echo Usuario::getImg(); ?>">
                </div><!--imagem usuario -->

            <?php } else { ?>

                <div class="avatar-usuario">
                    <i class="fa fa-user"></i>
                </div><!--avatar usuario -->

            <?php } ?>

            <div class="nome-usuario">
                <p><?php echo Usuario::getNome(); ?></p>
                <p><?php echo Usuario::getCargo(); ?></p>
            </div><!--nome usuario -->
        </div><!--box usuario -->

    </div>

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div> <!--menu-btn -->
            <div class="loggout">
                <a href="?loggout"><i class="fa fa-window-close"> </i> <span>Sair</span> </a>
            </div> <!-- loggout -->
            <div class="clear"></div>
        </div>
    </header>


</body>

</html>