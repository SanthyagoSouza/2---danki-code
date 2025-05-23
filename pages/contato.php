<!--Parei nos 10 minutos da video aula, pulei a parte que trabalha com o map do google e so vou focar no que me interessa
colocar mapa eu aprendo depois, preciso aprender a fazer backend
-->

<?php
if (isset($_POST['acao'])) {
  $nome = $_POST['nome'] ?? '';
  $telefone = $_POST['telefone'] ?? '';
  $email = $_POST['email'] ?? '';
  $mensagem = $_POST['mensagem'] ?? '';

  if ($email != '' && $nome != '' && $telefone != '' && $mensagem != '') {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $mail = new Email('smtp.hostinger.com', 'santhaygoponciano@145jacare.com', '', 'Santhyago');
      // Lembrar de retirar dados de email quando for fazer commit no github
      $mail->addAddress('santhyagoponciano@gmail.com', 'Santhyago');

      $mail->formatarEmail(array(
        'assunto' => 'teste',
        'corpo' => 'Nome: ' . $nome . "<br />" .
          'Email: ' . $email . "<br />" .
          'Telefone: ' . $telefone . "<br />" .
          'Mensagem: ' . $mensagem
      ));
   
    }
?>
<div class="contato-container">
  <h1>Deixe aqui sua mensagem!</h1>
  <div class="center">
    <form method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome...">
      <div></div>
      <input type="text" name="email" id="email" placeholder="Email...">
      <div></div>
      <input type="text" name="telefone" id="telefone" placeholder="Telefone...">
      <div></div>
      <textarea placeholder="Sua mensagem aqui" name="mensagem"></textarea>
      <div></div>
      <input type="submit" value="Enviar" name="acao">
    </form>
  </div>
</div>