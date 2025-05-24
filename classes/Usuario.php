<?php

use function PHPSTORM_META\type;

class Usuario
{

    public static function login($user, $password)
    {
        $pdo = Mysql::conectar();
        $sql = $pdo->prepare("SELECT * FROM admin_usuario WHERE login = ? AND senha = ?");
        $sql->execute([$user, $password]);

        if ($sql->rowCount() == 1) {
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            return true;

        }
        return false;

    }

    //metodos get

    //metodo que busca o nome, para usar e o chamar a Classe::metodo
    public static function getNome()
    {
        return $_SESSION['nome'] ?? null;
    }

    //metodo que busca o cargo
    public static function getCargo()
    {
        $cargos = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'
        ];

        $cargo = $_SESSION['cargo'] ?? null;

        return $cargos[$cargo] ?? 'Desconhecido';
    }
    
    // metodo que busca a imagem do usuario, e caso nao exista ele passa null!
    // acreditoq que se passar null ele deve carregar o icone do html
    public static function getImg()
    {
        return $_SESSION['img'] ?? null;
    }


}
?>