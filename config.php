<?php


$autoload = function ($class) {
    if($class == 'Email') {
        require_once('classes/phpmailer/phpmailer/PHPMailerAutoload.php');
    }
    include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDES_PATH', 'http://localhost/4%20-%20danki-code/');


?>