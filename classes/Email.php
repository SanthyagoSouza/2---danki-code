<?php

class Email
{

    private $mailer;

    public function __construct($host, $username, $password, $name)
    {

        $this->mailer = new PHPMailer;

        $this->mailer->isSMTP(); // 
        $this->mailer->Host = $host;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $username;
        $this->mailer->Password = $password;
        $this->mailer->SMTPSecure = 'ssl';
        $this->mailer->Port = 465;

        $this->mailer->setFrom($username, $name);

        $this->mailer->isHTML(true);

        $this->mailer->CharSet = 'UTF-8';

        // $this->maile->isSMTP(); // 
        // $this->maile->Host = 'smtp.hostinger.com';
        // $this->maile->SMTPAuth = true;
        // $this->maile->Username = 'santhaygoponciano@145jacare.com';
        // $this->maile->Password = 'Extrabom@2023';
        // $this->maile->SMTPSecure = 'ssl';
        // $this->maile->Port = 465;


    }

    public function addAddress($email, $name)
    {
        $this->mailer->addAddress($email, $name);
    }

    public function formatarEmail($info)
    {

        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body = $info['corpo'];
        $this->mailer->AltBody = strip_tags($info['corpo']);
    }


    public function enviarEmail()
    {
        if ($this->mailer->send()) {
            return true;
        } else {
            return false;

        }


    }


}
?>