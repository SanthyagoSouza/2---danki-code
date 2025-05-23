<style>
    section.banner-principal {
        width: 100%;
        height: 600px;
        background-image: url("./img/19187761.jpg");
        background-size: cover;
        position: relative;
    }
</style>

<section class="banner-principal">
    <div class="overlay"></div><!--overlay-->
    <div class="center">
<?php
if (isset($_POST['acao'])) {
    $email = $_POST['email'] ?? '';
    if ($email != '') {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail = new Email('smtp.hostinger.com', 'santhaygoponciano@145jacare.com', 'Extrabom@2023', 'Santhyago');
            // Lembrar de retirar dados de email quando for fazer commit no github
            $mail->addAddress('santhyagoponciano@gmail.com', 'Santhyago');

            $mail->formatarEmail(array(
                'assunto' => 'Um novo e-mail cadastrado no site',
                'corpo' => 'Email que foi cadastrado no site: ' . $email
            )); 
            // $mail->formatarEmail($info);  
            if($mail->enviarEmail()){
                    echo '<script>alert("email enviado na func enviarEmail")</script>';
                } else {
                    echo '<script>alert("Deu bosta")</script>';
                }
        } else {
            echo '<script>alert("E-mail inválido")</script>'; 
        }
    } else {
        echo '<script>alert("Preencha o campo e-mail")</script>';
    }
}
 
?>
        <form method="post">
            <h2>Qual o seu melhor email</h2>
            <input type="email" name="email" id="email" required>
            <input type="submit" value="Cadastrar" name="acao">
        </form>
    </div>

</section>
<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Santhyago Souza</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                It is a long established fact that a reader will be distracted by the readable content of a page
                when
            </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                It is a lo
            </p>
        </div><!--w50-->
        <div class="w50 left">
            <img class="right"
                src="<?php echo INCLUDES_PATH; ?> https://cdn-icons-png.flaticon.com/512/1373/1373255.png" alt="">
        </div><!--w50-->
        <div class="clear"></div>
    </div>
</section>

<section class="especialidades">
    <div class="center" id="servicos">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
            <h4>Css3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse delectus, nobis voluptatum tempore
                saepe rerum eos alias id modi laboriosam aliquam voluptatem voluptatibus magni, dolorum ipsam!
                Asperiores, accusamus a. Soluta.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
            <h4>Html5</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse delectus, nobis voluptatum tempore
                saepe rerum eos alias id modi laboriosam aliquam voluptatem voluptatibus magni, dolorum ipsam!
                Asperiores, accusamus a. Soluta.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-codepen" aria-hidden="true"></i></h3>
            <h4>Java script</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse delectus, nobis voluptatum tempore
                saepe rerum eos alias id modi laboriosam aliquam voluptatem voluptatibus magni, dolorum ipsam!
                Asperiores, accusamus a. Soluta.</p>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="extras" id="">
    <div class="center" >
        <div class="w50 left deposimentos-container">
            <h2 class="title">depoimentos dos nossos clientes</h2>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                    consequatur debitis totam sit
                    rem, sapiente ea delectus veritatis sed. Corrupti magni quam commodi error quae ratione,
                    deserunt facere nemo? Maxime!</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                    consequatur debitis totam sit
                    rem, sapiente ea delectus veritatis sed. Corrupti magni quam commodi error quae ratione,
                    deserunt facere nemo? Maxime!</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                    consequatur debitis totam sit
                    rem, sapiente ea delectus veritatis sed. Corrupti magni quam commodi error quae ratione,
                    deserunt facere nemo? Maxime!</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
        </div><!--w50-->
        <div class="w50 left servicos-container">
            <h2 class="title">Servicos</h2>
            <div class="servicos" id="depoimentos">
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquam porro similique
                        accusantium molestiae blanditiis delectus corporis aspernatur facere explicabo iusto ab eos
                        qui, ducimus cum, inventore tempore eligendi voluptatum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquam porro similique
                        accusantium molestiae blanditiis delectus corporis aspernatur facere explicabo iusto ab eos
                        qui, ducimus cum, inventore tempore eligendi voluptatum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquam porro similique
                        accusantium molestiae blanditiis delectus corporis aspernatur facere explicabo iusto ab eos
                        qui, ducimus cum, inventore tempore eligendi voluptatum.</li>

                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquam porro similique
                        accusantium molestiae blanditiis delectus corporis aspernatur facere explicabo iusto ab eos
                        qui, ducimus cum, inventore tempore eligendi voluptatum.</li>

                </ul>
            </div>
        </div><!--w50-->
        <div class="clear"></div>
    </div>
</section>
