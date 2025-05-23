<?php

session_start(); // Sempre que for trabalhar com logins e sessoes tem que declarar o session_start() no inicio do arquivo

$autoload = function ($class) {
    if ($class == 'Email') {
        require_once('classes/phpmailer/phpmailer/PHPMailerAutoload.php');
    }
    include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDES_PATH', 'http://localhost/4%20-%20danki-code/');
define('INCLUDES_PATH_PAINEL', INCLUDES_PATH.'painel/');


//conexao com banco de dados
define('HOST', 'localhost');
define('DATABASE', 'projeto01');
define('USER', 'root');
define('PASSWORD','');

?>