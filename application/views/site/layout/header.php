<!DOCTYPE html>
<html>
	
<!-- Mirrored from html.creaws.com/clinico/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 10 Apr 2015 15:27:23 GMT -->
<head>
		<title><?=SITE_TITULO?></title>
		
		<!-- metas -->
		<meta charset="utf-8">
		<meta name="author" content="http://grupo2d.net.br">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<!--/ metas -->
		
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>layerslider.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>fullwidth/skin.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>styles.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_CSS?>color-green.css">
		<link rel="stylesheet" type="text/css" href="<?=SITE_RAIZ?>assets/site/tuner/css/styles.css">
		
		<!--/ styles -->
		
		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
	</head>
	
	<body>
		<div class="page">

			<!-- page header -->
			<header class="page-header main-page sticky">
				<div class="sticky-wrapp">
					<div class="sticky-container">
						<!-- logo -->
						<section id="logo" class="logo">
							<div>
								<a href="index-2.html"><img src="<?=SITE_IMG?>/blue/logo.png" alt="Clinico"></a>
							</div>
						</section>
						<!--/ logo -->
						
						<!-- main nav -->
						<?php $this->load->view('site/layout/menu'); ?>
						<!--/ main nav -->
						
						<!-- mobile nav -->
						<?php $this->load->view('site/layout/menu_responsive'); ?>
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			
			<!-- quick search -->
			<form id="quick-search" class="quick-search">
				<fieldset>
					<legend>Restrito</legend>
					
					<input type="text" placeholder="Login" id="login" name="login" class="ui-autocomplete-input" autocomplete="off">
					<input type="text" placeholder="Senha" id="senha" name="senha" class="ui-autocomplete-input" autocomplete="off">
					
					<button type="submit">Acessar</button>
					<div class="switcher">
						<button id="quick-search-switcher" type="button">Restrito</button>
					</div>
				</fieldset>				
			</form>
			<!--/ quick search -->

			
			
			
