<?php

use App\Controllers\Usuario;

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('/css/login.css/') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/estilo.css/') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.css/') ?>">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JAVASCRIPT-->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- JAVASCRIPT-->
</head>

<body id="corpo">

<header class="header-fixed">

    <div class="header-limiter">

        <h1><a href="<?= base_url('home') ?>">Sistema de <span>Notícias</span></a></h1>

        <nav>
            <a href="<?= base_url('home') ?>">Home</a>
            <a href="#" class="selected">Blog</a>
            <a href="<?= base_url('noticias') ?>">Visão Geral</a>
            <a href="<?= base_url('sobre') ?>">About</a>
            <a href="#">Faq</a>
            <a href="<?= base_url('contato') ?>">Contact</a>
            <a href="<?php echo base_url('usuario/login') ?>">
                <div class="card bg-transparent" id="caixa_img_session">
                    <?php
                    $sessao = new Usuario();

                    if (isset($sessao)) {
                        $img = '/imgs/session_open.png';
                    } else if (!isset($sessao)){
                        $img = '/imgs/session_close.png';
                    }
                    helper('html');
                    echo img(['src' => base_url($img),
                        'id' => 'img_session']);
                    ?>
                    <!--<img src="<?php /*echo base_url('/imgs/session_open.png') */ ?>" id="img_session">-->

                </div>
            </a>
        </nav>

    </div>


</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>
<div class="container">


    <!-- The content of your page would go here. -->
