<?php 

class Painel
{
    public static function logado()
    {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function alert($tipo, $mensagem)
    {
        if ($tipo == 'sucesso') {
            echo '<div class="alert alert-success">' . $mensagem . '</div>';
        } else if ($tipo == 'erro') {
            echo '<div class="alert alert-danger">' . $mensagem . '</div>';
        }
    }
}

?>