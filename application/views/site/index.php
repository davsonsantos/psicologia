<?php $this -> load -> view('site/layout/header'); ?>
<?php $this -> load -> view('site/layout/slide'); ?>

<!-- page content -->
<main class="page-content">
	<div class="grid-row">
		<!--	 <section class="benefits">
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
		</section> -->
	</div>

	<div class="grid-row">
		<!-- services -->
		<section class="services">
			<ul>
				<li>
					<a class="pic"><i class="fa fa-ambulance"></i></a>
					<h2><a href="#">Atendimento em situação emergencial </a></h2>
					<p>
						Trata-se de um acolhimento psicológico, ou seja, um atendimento a nível emergencial. Distingui-se da psicoterapia, e consiste em uma sessão e dois retornos espontâneos...
					</p>
					<a href="#" class="more fa fa-long-arrow-right"></a>
				</li>
				<li>
					<a class="pic"><i class="fa fa-user-md"></i></a>
					<div class="text">
						<h2><a href="#">Psicoterapia Clínica </a></h2>
						<p>
							A psicoterapia é um processo conduzido por um especialista no qual o <i>indivíduo ou o grupo</i> amplia a consciência que tem de si mesmo abarcando diversos aspectos de sua vida,...
						</p>
						<a href="#" class="more fa fa-long-arrow-right"></a>
					</div>
				</li>
				<li>
					<a class="pic"><i class="fa fa-clock-o"></i></a>
					<h2><a href="#">Orientação Vocacional </a></h2>
					<p>
						Este serviço é voltado para atendimento em <i>grupo ou individual</i> buscando oferecer a possibilidade de uma decisão mais responsável sobre sua escolha e consequentemente de seu próprio existir,...
					</p>
					<a href="#" class="more fa fa-long-arrow-right"></a>
				</li>
				<li>
					<a class="pic"><i class="fa fa-home"></i></a>
					<div class="text">
						<h2><a href="#">Atendimento Domiciliar/</i>Home Care</i></a></h2>
						<p>
							É uma assistência psicológica em <u>domicílio</u> – entendendo como domicílio as casas de repouso, residências, hospitais, entre outros. ... 
						</p>
						<a href="#" class="more fa fa-long-arrow-right"></a>
					</div>
				</li>
				
				<li>
					<a class="pic"><i class="fa fa-signal"></i></a>
					<h2><a href="#"><strong>Acompanhamento e Orientação</strong> <small style="font-size: 10px">(Gestantes, Casal e Família)</small> </a></h2>
					<p>
						A <i>gestante</i> passa por grandes transformações físicas e sociais, o que pode deixá-la em um momento de vulnerabilidade, assim, busca-se trabalhar as questões a cerca da gestação,...
					</p>
					<a href="#" class="more fa fa-long-arrow-right"></a>
				</li>
				<li>
					<a class="pic"><i class="fa fa-asterisk"></i></a>
					<div class="text">
						<h2><a href="#">Plantão Psicológico na escola</i></a></h2>
						<p>
							O plantão psicológico é destinado a alunos e professores, que buscam um atendimento de apoio emergencial, em situações de crise ou em situação que tire o equilíbrio momentâneo e... 
						</p>
						<a href="#" class="more fa fa-long-arrow-right"></a>
					</div>
				</li>
				
				<li>
					<a class="pic"><i class="fa fa-signal"></i></a>
					<h2><a href="#"><strong>Palestras: Educacionais e Motivacionais </strong> <small style="font-size: 10px">Gestantes, Casal e Família)</small> </a></h2>
					<p>
						Neste serviço vamos trabalhar sobre as motivações internas e as externas que envolvem o sucesso na Instituição Escola e Organizações,...
					</p>
					<a href="#" class="more fa fa-long-arrow-right"></a>
				</li>
				<li>
					<a class="pic"><i class="fa fa-asterisk"></i></a>
					<div class="text">
						<h2><a href="#">Oficinas e Cursos</i></a></h2>
						<p>
							Este serviço é elaborado para atender as mais diversas áreas com foco no desenvolvimento das competências e habilidades e treinamento comportamental. ... 
						</p>
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
			<div class="widget-title">
				Psicólogas
			</div>
			<div id="doctors-carousel" class="owl-carousel">
				<div class="item">
					<div class="pic">
						<img src="<?=SITE_IMG?>pic/doctor-1.jpg" width="270" height="270" alt="Dra. Nígia Pessoa">
						<div class="links">
							<ul>
								<li>
									<a href="<?=SITE_RAIZ?>inicio/nigia" class="fa fa-plus"></a>
								</li>
							</ul>
						</div>
					</div>
					<h3><a href="<?=SITE_RAIZ?>inicio/nigia">Dr. Nígia Pessoa</a></h3>
					<p>
						Psicóloga
					</p>
				</div>
				<div class="item">
					<div class="pic">
						<img src="<?=SITE_IMG?>pic/doctor-2.jpg" width="270" height="270" alt="Dra. Outra Dra">
						<div class="links">
							<ul>
								<li>
									<a href="<?=SITE_RAIZ?>inicio/damiana" class="fa fa-plus"></a>
								</li>
							</ul>
						</div>
					</div>
					<h3><a href="<?=SITE_RAIZ?>inicio/damiana">Dra. Damiana Paixão</a></h3>
					<p>
						Psicóloga
					</p>
				</div>
				
			</div>
		</section>
		<!--/ doctors carousel -->
	</div>

	<div class="grid-row">
		<div class="grid-col grid-col-4">
			<!-- departments -->
			<!-- <section class="widget widget-departments">
				<div class="widget-title">
					Departments
				</div>
				<dl>
					<dt>
						<i class="fa fa-medkit"></i>Primary Health Care
					</dt>
					<dd>
						Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
					<dt>
						<i class="fa fa-user-md"></i>Gynaecological Clinic
					</dt>
					<dd>
						Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
					<dt>
						<i class="fa fa-stethoscope"></i>Diagnosis With Precise
					</dt>
					<dd>
						Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
					<dt>
						<i class="fa fa-heart"></i>Cardiac Clinic
					</dt>
					<dd>
						Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
					<dt>
						<i class="fa fa-scissors"></i>General Surgery
					</dt>
					<dd>
						Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
					<dt class="opened">
						<i class="fa fa-wheelchair"></i>Rehabilitation Studio
					</dt>
					<dd>
						Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.
						<br/>
						<a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a>
					</dd>
				</dl>
			</section> -->
			<!--/ departments -->
		</div>

		<div class="grid-col grid-col-4">
			<!-- sevices -->
			<!-- <section class="widget widget-sevices">
				<div class="widget-title">
					Our Medical Services
				</div>
				<ul>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiothoracic Surgery</a>
					</li>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiovascular Diseases</a>
					</li>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ophthalmology</a>
					</li>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dermatology</a>
					</li>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General Surgery</a>
					</li>
					<li>
						<i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Consultative & Diagnostic</a>
					</li>
				</ul>
			</section> -->
			<!--/ sevices -->
		</div>

		<div class="grid-col grid-col-4">
			<!-- appointment -->
			<!-- <section class="widget widget-appointment">
				<div class="widget-title">
					Make an Appointment
				</div>
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
							<button type="submit" class="button" value="Submit">
								Send Message
							</button>
						</div>
					</fieldset>
				</form>
			</section> -->
			<!--/ appointment -->
		</div>
	</div>
</main>
<!--/ page content -->

<?php $this -> load -> view('site/layout/footer'); ?>