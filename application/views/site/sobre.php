<?php $this -> load -> view('site/layout/header'); ?>
<section class="page-title">
	<div class="grid-row clearfix">
		<h1>Sobre</h1>
		<nav class="bread-crumbs">
			<a href="<?=SITE_RAIZ?>">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
			<a href="#">Sobre</a>
		</nav>
	</div>
</section>

<main class="page-content">
	<div class="grid-row">
		<div class="grid-col grid-col-5">
			<!-- philosophy -->
			<section class="widget">
				<div class="widget-title">
					Nossa Filosofia
				</div>

				<div class="wpb_text_column wpb_content_element">
					<div class="wpb_wrapper">
						<img src="<?=SITE_IMG?>simbolo.png" width="260" height="246" alt="" class="alignleft">
						<h1><b>Transformar</b></h1>
						<p>
							<strong>Transformar é um Consultório de Psicologia</strong> que proporciona para o seu cliente uma nova maneira de resignificar sua vida, adquirindo autoconhecimento, autonomia e amadurecimento pessoal e profissional. Visa motivar o comportamento humano em todos os seus processos mentais.
						</p>
						<br/>
						<h1><b>Quando procurar ajuda de uma psicóloga?</b></h1>
						<p>
							Em situação de sofrimento, dificuldades no relacionamento familiar, na aprendizagem, estafa mental, stress, para o desenvolvimento pessoal e Transtornos como Depressão, Ansiedade, Fobias, Obsessivo Compulsivo, Distúrbios alimentares, Dependência química e outros.
						</p>
						<br>
					</div>
					<a href="<?=SITE_RAIZ?>site/inicio/servicos" class="wpb_button wpb_wpb_button wpb_btn-arrow-right wpb_regularsize float-right">
						Saiba Mais
					</a>
				</div>
			</section>
			<!--/ philosophy -->
		</div>
		<div class="grid-col grid-col-4">
			<!-- departments -->
			<section class="widget widget-departments">
				<div class="widget-title">
					Nossos Serviços
				</div>
				<dl>
					<dt>
						<i class="fa fa-check"></i>Atendimento em situação emergencial 
					</dt>
					<dd>
						Trata-se de um acolhimento psicológico, ou seja, um atendimento a nível emergencial. Distingui-se da psicoterapia, e consiste em uma sessão e dois retornos espontâneos...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Psicoterapia Clínica 
					</dt>
					<dd>
						A psicoterapia é um processo conduzido por um especialista no qual o <i>indivíduo ou o grupo</i> amplia a consciência que tem de si mesmo abarcando diversos aspectos de sua vida,...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Orientação Vocacional
					</dt>
					<dd>
						Este serviço é voltado para atendimento em <i>grupo ou individual</i> buscando oferecer a possibilidade de uma decisão mais responsável sobre sua escolha e consequentemente de seu próprio existir,...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Atendimento Domiciliar/</i>Home Care</i>
					</dt>
					<dd>
						É uma assistência psicológica em <u>domicílio</u> – entendendo como domicílio as casas de repouso, residências, hospitais, entre outros. ...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Acompanhamento e Orientação
					</dt>
					<dd>
						A <i>gestante</i> passa por grandes transformações físicas e sociais, o que pode deixá-la em um momento de vulnerabilidade, assim, busca-se trabalhar as questões a cerca da gestação,...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Plantão Psicológico na escola
					</dt>
					<dd>
						O plantão psicológico é destinado a alunos e professores, que buscam um atendimento de apoio emergencial, em situações de crise ou em situação que tire o equilíbrio momentâneo e...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Palestras:Educacionais e Motivacionais
					</dt>
					<dd>
						Neste serviço vamos trabalhar sobre as motivações internas e as externas que envolvem o sucesso na Instituição Escola e Organizações,...
					</dd>
					<dt>
						<i class="fa fa-check"></i>Oficinas e Cursos
					</dt>
					<dd>
						Este serviço é elaborado para atender as mais diversas áreas com foco no desenvolvimento das competências e habilidades e treinamento comportamental. ...
					</dd>
				</dl>
			</section>
			<!--/ departments -->
		</div>
		<hr>
	</div>
	<div class="grid-row">
		<!-- doctors carousel -->
		<section class="widget doctors-carousel doctors">
			<div class="widget-title">
				Psicólogas
			</div>
			<div id="doctors-carousel" class="owl-carousel">
				<div class="item">
					<div class="pic">
						<img src="<?=SITE_IMG?>pic/doctor-1.jpg" width="270" height="270" alt="Psic. Nígia Pessoa">
						<div class="links">
							<ul>
								<li>
									<a href="<?=SITE_RAIZ?>inicio/nigia" class="fa fa-plus"></a>
								</li>
							</ul>
						</div>
					</div>
					<h3><a href="<?=SITE_RAIZ?>inicio/nigia">Psic. Nígia Pessoa</a></h3>
					<p>
						Psicóloga
					</p>
				</div>
				<div class="item">
					<div class="pic">
						<img src="<?=SITE_IMG?>pic/doctor-2.jpg" width="270" height="270" alt="Psic. Damiana Paixão">
						<div class="links">
							<ul>
								<li>
									<a href="<?=SITE_RAIZ?>inicio/damiana" class="fa fa-plus"></a>
								</li>
							</ul>
						</div>
					</div>
					<h3><a href="<?=SITE_RAIZ?>inicio/damiana">Psic. Damiana Paixão</a></h3>
					<p>
						Psicóloga
					</p>
				</div>
				
			</div>
		</section>
		<!--/ doctors carousel -->
	</div>
</main>
<?php $this -> load -> view('site/layout/footer'); ?>