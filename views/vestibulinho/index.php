<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<div class="img-container col-lg-10 col-lg-offset-1">
				<img src="<?php echo URL;?>images/vestibulinho.png" class="img-responsive" style="max-height: 60vh;"/>
			</div>
		</div>
		<div class="container">
			<div class="col-sm-10 col-sm-offset-1">
				<h3 style="text-indent: 60px;">O Vestibulinho é o processo seletivo de alunos realizado tanto no CASD Vestibulares como no Casdinho, sendo composto de duas etapas: um Exame Teórico, em que são avaliados os conhecimentos específicos de cada nível escolar (Ensino Médio no CASDVest e Ensino Fundamental até o 8º ano no Casdinho) e uma Entrevista Socioeconômica, momento que a situação social e econômica do candidato e de sua família são compreendidas para garantirmos que as pessoas que mais precisam do nosso apoio sejam atendidas.</h3>
				<h3 style="text-indent: 60px;">A Entrevista Socioeconômica possui caráter eliminatório no nosso processo (candidatos não aprovados na Entrevista não poderão se matricular), mas é o Exame Teórico o responsável pela classificação dos candidatos (havendo mais candidatos que o número de vagas disponível, convocamos os candidatos na ordem em que obtiveram as maiores notas no Exame).</h3>
			</div>
			<div class="col-xs-12">
				<h2 class="text-center vestibulinho-destaque" >Um sonho sonhado sozinho é apenas um sonho, mas, quando sonhado junto, torna-se realidade. <br> Faça sua inscrição e venha fazer parte da nossa Família!</h2>
			</div>
		</div>
	</header>
	<section id="informacoes">
		<div class="container">
			<div class="col-sm-10 col-sm-offset-1" style="position: relative;">
				<div class="img-container nuvem-vestibulinho">
				<img src="<?php echo URL;?>images/nuvemcasdv.png" class="img-responsive">
				</div>
				<?php if ($this->variables['status_vestibulinho_casd']) {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 30%">
					<a href="<?php echo VESTIBULINHO_CASD_LINK;?>">
						<img src="<?php echo URL;?>images/inscreva-se.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php  } else {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 30%">
					<a href="#">
						<img src="<?php echo URL;?>images/inscricoes_breve.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php } if ($this->variables['consulta_vestibulinho_casd']) {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 45%">
					<a href="<?php echo VESTIBULINHO_CASD_CONSULTA_LINK;?>">
						<img src="<?php echo URL;?>images/consulte.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php }?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 60%">
					<a href="<?php echo VESTIBULINHO_CASD_EDITAL_LINK;?>">
						<img src="<?php echo URL;?>images/edital.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<div class="img-container vestibulinho-nuvem-item" style="top: 75%">
					<a href="<?php echo VESTIBULINHO_CASD_PROVAS_LINK;?>">
						<img src="<?php echo URL;?>images/provas.png" class="img-responsive-fullwidth">
					</a>
				</div>
			</div>
			<div class="col-sm-10 col-sm-offset-1" style="position: relative;">
				<div class="img-container nuvem-vestibulinho">
				<img src="<?php echo URL;?>images/nuvemcasdinho.png" class="img-responsive">
				</div>
				<?php if ($this->variables['status_vestibulinho_casdinho']) {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 30%">
					<a href="<?php echo VESTIBULINHO_CASDINHO_LINK;?>">
						<img src="<?php echo URL;?>images/inscreva-se.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php  } else {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 30%">
					<a href="#">
						<img src="<?php echo URL;?>images/inscricoes_breve.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php } if ($this->variables['consulta_vestibulinho_casdinho']) {?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 45%">
					<a href="<?php echo VESTIBULINHO_CASDINHO_CONSULTA_LINK;?>">
						<img src="<?php echo URL;?>images/consulte.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<?php }?>
				<div class="img-container vestibulinho-nuvem-item" style="top: 60%">
					<a href="<?php echo VESTIBULINHO_CASDINHO_EDITAL_LINK;?>">
						<img src="<?php echo URL;?>images/edital.png" class="img-responsive-fullwidth">
					</a>
				</div>
				<div class="img-container vestibulinho-nuvem-item" style="top: 75%">
					<a href="<?php echo VESTIBULINHO_CASDINHO_PROVAS_LINK;?>">
						<img src="<?php echo URL;?>images/provas.png" class="img-responsive-fullwidth">
					</a>
				</div>
			</div>
			
		</div>
	</section>
</div>