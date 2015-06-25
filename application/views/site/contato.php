<?php $this -> load -> view('site/layout/header'); ?>
<section class="page-title">
	<div class="grid-row clearfix">
		<h1>Sobre</h1>
		<nav class="bread-crumbs">
			<a href="<?=SITE_RAIZ ?>">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp; <a href="#">Contato</a>
		</nav>
	</div>
</section>

<main class="page-content">
	
	<div class="grid-row">
		<div class="grid-col grid-col-9">
			<!-- feedback -->
			<article class="feedback">
				<div class="widget-title">
					Entre em contato preenchendo o formulário abaixo
				</div>
				<?php echo get_msg('msg'); ?>
				<form action="<?=SITE_RAIZ?>site/inicio/enviar_email" id="contato" method="post">
					<fieldset>
						<div class="clearfix">
							<div class="input">
								<label>Nome:</label>
								<input type="text" name="name" required="">
							</div>
							<div class="input">
								<label>Email:</label>
								<input type="email" name="email" required="">
							</div>
						</div>
						<div class="clearfix">
							<div class="input">
								<label>Falar com?</label>
								<select name="destino" required aria-required="true">
									<option value="">Escolha a Psicologo(a)</option>
									<option value="transformarpsi@gmail.com;Nígia Pessoa">Psic. Nígia Pessoa</option>
									<option value="transformarpsi@gmail.com;Damiana Paixão">Psic. Damiana Paixão</option>
								</select>
							</div>
							<div class="input">
								<label>Assunto:</label>
								<input type="text" name="subject" required="">
							</div>
						</div>
						<label>Mensagem:</label>
						<textarea rows="6" name="message" required=""></textarea>
						<div class="clearfix captcha">
							<button type="submit" class="button" value="Submit">
								Enviar
							</button>

						</div>
					</fieldset>
				</form>
			</article>
			<!--/ feedback -->
		</div>

	</div>
</main>
<?php $this -> load -> view('site/layout/footer'); ?>