<nav class="main-nav">
	<ul>
		<li>
			<a href="<?=SITE_RAIZ?>" <?php if($this->uri->segment(3) == "" or $this->uri->segment(3) == "index") echo 'class="active"';?>><i class="fa fa-plus"></i>Home</a>
		</li>
		<li>
			<a href="<?=SITE_RAIZ?>site/inicio/sobre" <?php if($this->uri->segment(3) == "sobre") echo 'class="active"';?>><i class="fa fa-plus"></i>Sobre</a>
		</li>
		<li>
			<a href="<?=SITE_RAIZ?>site/inicio/servicos" <?php if($this->uri->segment(3) == "servicos") echo 'class="active"';?>><i class="fa fa-plus"></i>Serviços</a>
		</li>
		<li>
			<a href="<?=SITE_RAIZ?>site/inicio/contato" <?php if($this->uri->segment(3) == "contato") echo 'class="active"';?>><i class="fa fa-plus"></i>Contato</a>
		</li>
	</ul>
</nav>