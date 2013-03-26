<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Name of project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <link async href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <!--[if IE]>
            <link href="css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->

        <?php
            //JS/ESTILOS ESPECIFICOS(MODULARIZADO) - HEADER
            if (isset($_GET['pagina'])) {
                if (file_exists('pages/' . $_GET['pagina'] . '/header.php')) {
                    include('pages/' . $_GET['pagina'] . '/header.php');
                }
            }
        ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Você está usando um navegador muito antigo. <a href="http://browsehappy.com/">Atualize seu navegador para um melhor e mais rápido</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">instale o Google Chrome Frame</a> para ter uma melhor experiência.</p>
        <![endif]-->

        <?php
            //INICIO ESQUELETO SITE
        ?>
        <div id="page">
            <?php
                //GLOBAL HEADER
                if (file_exists('pages/_tiles/header.php')) {
                    include('pages/_tiles/header.php');
                }
            ?>

            <?php
                //CONTEUDO DA CAPA
                if (isset($_GET['pagina']) && $_GET['pagina'] == 'capa') {
                    if (file_exists('pages/' . $_GET['pagina'] . '/body.php')) {
                        include('pages/' . $_GET['pagina'] . '/body.php');
                    }
                }
            ?>

            <?php 
                //BREADCRUMB
                if (file_exists('pages/_tiles/breadcrumb.php') && $_GET['pagina'] != 'capa') {
                    include('pages/_tiles/breadcrumb.php');
                }
            ?>
            <div id="content">

                <?php
                    //CONTEUDO DE PAGINA
                    if (isset($_GET['pagina']) && $_GET['pagina'] != 'capa') {
                        if (file_exists('pages/' . $_GET['pagina'] . '/body.php')) {
                            include('pages/' . $_GET['pagina'] . '/body.php');
                        }
                    }
                ?>
            </div>
        </div>

        <?php
            //GLOBAL FOOTER
            if (file_exists('pages/_tiles/footer.php')) {
                include('pages/_tiles/footer.php');
            }
        ?>
        
        <?php
            //FIM ESQUELETO SITE
        ?>

        <?php
            //JS/ESTILOS ESPECIFICOS(MODULARIZADO) - FOOTER
            if (isset($_GET['pagina'])) {
                if (file_exists('pages/' . $_GET['pagina'] . '/footer.php')) {
                    include('pages/' . $_GET['pagina'] . '/footer.php');
                }
            }
        ?>

    </body>
</html>