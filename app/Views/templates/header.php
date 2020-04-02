<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $title ?></title>

	<link rel="stylesheet" href="<?= base_url('/css/estilo.css/') ?>">
	<link rel="stylesheet" href="<?= base_url('/css/bootstrap.css/') ?>">
	<!-- <link rel="stylesheet" href="assets/header-fixed.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

	<header class="header-fixed">

		<div class="header-limiter">

			<h1><a href="<?= base_url('home') ?>">Sistema de <span>Notícias</span></a></h1>

			<nav>
				<a href="<?= base_url('home') ?>">Home</a>
				<a href="#" class="selected">Blog</a>
				<a href="<?= base_url('news') ?>">Visão Geral</a>
				<a href="<?= base_url('sobre') ?>">About</a>
				<a href="#">Faq</a>
				<a href="<?= base_url('contato') ?>">Contact</a>
			</nav>

		</div>

	</header>

	<!-- You need this element to prevent the content of the page from jumping up -->
	<div class="header-fixed-placeholder"></div>
	<div class="container">




		<!-- The content of your page would go here. -->