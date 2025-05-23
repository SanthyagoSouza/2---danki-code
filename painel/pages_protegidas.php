<?php
include_once('../config.php');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Verifica se está tentando acessar o login.php
$paginaAtual = basename($_SERVER['PHP_SELF']);
if ($paginaAtual == 'login.php') {
    return;
}

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: ' . INCLUDES_PATH_PAINEL . 'login.php');
    exit();
}
?>