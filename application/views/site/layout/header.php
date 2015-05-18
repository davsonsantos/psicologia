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

			<!-- slider -->
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="<?=SITE_IMG?>pic/medical-slide-1.jpg" alt="" class="ls-bg">
						
						 <div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-bolt"></span>
							<h2><span>Terapia</span>Casal</h2>
							<p>Transformar Psicologia</p> 
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="button">Mais...</a>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div> 
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="<?=SITE_IMG?>pic/medical-slide-2.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
							<span class="icon fa fa-comments"></span>
							<h2><span>Terapia</span>Grupo</h2>
							<p>Trabalhamos para sua empresa.</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="button">Mais...</a>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
						<img src="<?=SITE_IMG?>pic/medical-slide-3.jpg" alt="" class="ls-bg">
						
						 <div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
							<span class="icon fa fa-flask"></span>
							<h2><span>Terapia</span>Familias</h2>
							<p>Tenha uma familia complata</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="button">Mais</a>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div> 
					</div>
				</section>
			</div>
			<!--/ slider -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section class="benefits">
						<ul>
							<li>
								<div class="pic"><i class="fa fa-user"></i></div>
								<div class="text">
									<h2>Crianças</h2>
									<p>Aliquam ut lorem scelerisque, consequat mi quis, scelerisque massa.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-users"></i></div>
								<div class="text">
									<h2>Adolescente</h2>
									<p>Cum sociis natoque penatibus et magnis dis parturient liquam montes liquam montes.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-user"></i></div>
								<div class="text">
									<h2>Adulto</h2>
									<p>Suspendisse mattis tristique libero at placerat. Nullam diam risus.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-users"></i></div>
								<div class="text">
									<h2>Idoso</h2>
									<p>Pellentesque quam metus, venenatis quis eleifend sit amet porttitor.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ benefits -->
				</div>
				
				<div class="grid-row">
					<!-- services -->
					<section class="services">
						<ul>
							<li>
								<a class="pic"><i class="fa fa-leaf"></i></a>
								<h2><a href="#">Transplant Services</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-user-md"></i></a>
								<div class="text">
									<h2><a href="#">Qualified Doctors</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
							<li>
								<a class="pic"><i class="fa fa-clock-o"></i></a>
								<h2><a href="#">24 Hours Service</a></h2>
								<p>Mauris consectetur, dui eget ullamcorper hendrerit, eros ligula consectetur dui, vitae adipiscing nunc enim eu justo. Donec quis mollis neque. Pellentesque facilisis.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-ambulance"></i></a>
								<div class="text">
									<h2><a href="#">Emergency Departments</a></h2>
									<p>Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta. Donec cursus tellus libero, non porttitor felis luctus ut.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ services -->	
				</div>
				
				<div class="grid-row">
					<!-- doctors carousel -->
					<section class="widget doctors-carousel doctors">
						<div class="widget-title">Our Doctors</div>
						<div id="doctors-carousel" class="owl-carousel">
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Butcher House</a></h3>
								<p>Ophthomologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Brick Wall</a></h3>
								<p>Dermatologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Sno White</a></h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Mangle Taleebin</a></h3>
								<p>Surgeon</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Brick Wall</a></h3>
								<p>Dermatologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Mangle Taleebin</a></h3>
								<p>Surgeon</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Sno White</a></h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3><a href="staff-page.html">Dr. Butcher House</a></h3>
								<p>Ophthomologist</p>
							</div>
						</div>
					</section>
					<!--/ doctors carousel -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-4">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Departments</div>
							<dl>
								<dt><i class="fa fa-medkit"></i>Primary Health Care</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-user-md"></i>Gynaecological Clinic</dt>
								<dd>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-stethoscope"></i>Diagnosis With Precise</dt>
								<dd>Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-heart"></i>Cardiac Clinic</dt>
								<dd>Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-scissors"></i>General Surgery</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt class="opened"><i class="fa fa-wheelchair"></i>Rehabilitation Studio</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- sevices -->
						<section class="widget widget-sevices">
							<div class="widget-title">Our Medical Services</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiothoracic Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiovascular Diseases</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ophthalmology</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dermatology</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Consultative & Diagnostic</a></li>
							</ul>
						</section>
						<!--/ sevices -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- appointment -->
						<section class="widget widget-appointment">
							<div class="widget-title">Make an Appointment</div>
							<form action="http://html.creaws.com/clinico/php/contact-send.php" id="contactform">
								<fieldset>
									<div class="row">
										<input type="text" placeholder="Full Name" name="name">
										<i class="fa fa-user"></i>
									</div>
									<div class="row">
										<input type="tel" placeholder="Phone Number" name="phone">
										<i class="fa fa-phone"></i>
									</div>
									<div class="row">
										<input type="email" placeholder="Email Address" name="email">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="row">
										<input type="text" placeholder="Appointment Date" name="date">
										<i class="fa fa-calendar"></i>
									</div>
									<div class="row">
										<textarea cols="30" rows="5" placeholder="Message" name="message"></textarea>
										<i class="fa fa-align-left"></i>
									</div>
									<div class="clearfix captcha">
										<button type="submit" class="button" value="Submit">Send Message</button>
									</div>
								</fieldset>
							</form>
						</section>
						<!--/ appointment -->	
					</div>
				</div>
			</main>
			<!--/ page content -->
