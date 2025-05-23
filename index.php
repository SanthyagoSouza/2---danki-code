<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH; ?>estilo/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDES_PATH; ?>path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descricao do site">
    <meta name="keywords" content="palavras,chaves,do,site">
    <title>projeto 01</title>



</head>

<body>


    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    // Aqui eu crio a tag target com atributo target para usar js e fazer o scroll
// no elemento que eu quero
    switch ($url) {
        case 'depoimentos':
            $sobre = true;
            echo '<target target="depoimentos"  />';
            break;
        case 'servicos':
            $servicos = true;
            echo '<target target="servicos"  />';
            break;
        default:
            $pagina404 = true;
            break;
    }

    ?>


    <header>
        <div class="center">
            <div class="logo left"><a href=""> logomarca </a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDES_PATH; ?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDES_PATH; ?>depoimentos">Sobre</a></li>
                    <li><a href="<?php echo INCLUDES_PATH; ?>servicos">Servicos</a></li>
                    <li><a realtime='realtime' href="<?php echo INCLUDES_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDES_PATH; ?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDES_PATH; ?>depoimentos">Sobre</a></li>
                    <li><a href="<?php echo INCLUDES_PATH; ?>servicos">Servicos</a></li>
                    <li><a realtime='realtime' href="<?php echo INCLUDES_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <div class="container-principal">


        <?php

        //aqui eu verifico se a pagina existe, se existir eu incluo ela, se não existir eu incluo a pagina 404
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            if ($url != 'depoimentos' && $url != 'servicos') {
                $pagina404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }

        }
        ?>

    </div> <!-- container-principal -->
    <footer <?php if (isset($pagina404) && $pagina404 == true) {
        echo 'class="fixed"';
    } ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="<?php echo INCLUDES_PATH; ?>script/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo INCLUDES_PATH; ?>js/script.js"></script>

    <?php if (isset($contato) && $contato == true) {

        ?>
        <script>
            (g => {
                var h, a, k, p = "The Google Maps JavaScript API",
                    c = "google",
                    l = "importLibrary",
                    q = "__ib__",
                    m = document,
                    b = window;
                b = b[c] || (b[c] = {});
                var d = b.maps || (b.maps = {}),
                    r = new Set,
                    e = new URLSearchParams,
                    u = () => h || (h = new Promise(async (f, n) => {
                        await (a = m.createElement("script"));
                        e.set("libraries", [...r] + "");
                        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                        e.set("callback", c + ".maps." + q);
                        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                        d[q] = f;
                        a.onerror = () => h = n(Error(p + " could not load."));
                        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                        m.head.append(a)
                    }));
                d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
            })({
                key: "AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4",
                v: "weekly",
            });
        </script>
        <script src="<?php echo INCLUDES_PATH; ?>/js/map.js"></script>

    <?php }

    ?>
</body>

</html>