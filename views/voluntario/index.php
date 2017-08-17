<div id="page-wrapper">
	<header id="header">
		<div class="container text-center">
			<h1>Seja Voluntário!</h1>
		</div>
	</header>

	<section id="revolucao">
		<div class="row normal-margin">
			<div class="container">
				<div class="row normal-margin flex">
					<div class="col-sm-6">
						<h2>Faça parte da Revolução!</h2>
						<p class="textoPage">
							Participar do Centro Educacional Santos Dumont vai muito além de realizar um trabalho voluntário. No cotidiano do curso, passamos a fazer parte da vida dos alunos, formamos com eles uma nova família e, principalmente, ajudamos a construir e trilhar seus sonhos. 
						</p>
						<p class="textoPage">
							O voluntário tem a oportunidade de crescer e amadurecer como cidadão, mais consciente e socialmente ativo, ao exercitar suas habilidades profissionais e pessoais no âmbito social e ao permitir o acesso à cultura e à educação formal aos alunos beneficiados. Ao fim de nosso trabalho, sabemos que, de fato, nosso trabalho pode fazer justiça a uma desleal condição social, e pudemos fornecer as ferramentas necessárias para aqueles que a fizeram por merecer. 
						</p>
						<p class="textoPage">
							Para ser voluntário, você pode fazer parte da equipe de membros e de professores. Os membros administrativos estão distribuídos nas áreas de ensino, recursos humanos, desenvolvimento, gestão, marketing, financeiro, captação de recursos e psicologia. Já a equipe de professores dedicam seu tempo a ensinar português, matemática, biologia, física, química, história, geografia, sociologia, artes, astronomia e informática a alunos que buscam em suas aulas o suporte necessário para alcançar seus objetivos. 
						</p>
					</div>
					<div id="voluntarioImage" class="col-sm-6 img-container">
						<img src="<?php echo URL;?>images/voluntarioImage.png" class="img-responsive" />
						<h4 class="legendaImagem">Voluntários no Vestibulinho Casdinho 2016</h4>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row normal-margin">
					<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 queroAjudarDestaque">
						<p class="textoPage">
							<span>Trabalhar para a melhoria da educação brasileira é de um valor inestimável. Se você está disposto a ajudar e a aprender, essa é a oportunidade!</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sejaVoluntario">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<form action="<?php echo URL;?>voluntario/interesseVoluntario" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="nome" placeholder="Nome" type="text" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="telefone" placeholder="Telefone (com DDD)" type="text" required>
                    </div>
                    <div class="form-group">
                    	<select class="form-control"  name="tipoVoluntario" required>
                    		<option value="" selected disabled>Selecione a posição desejada</option>
                    		<option value="professor">Professor</option>
                    		<option value="psicologo">Psicólogo</option>
                    		<option value="plantonista">Plantonista</option>
                    		<option value="corretor">Corretor</option>
                    	</select>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button id="buttonVoluntario" class="btn btn-block btn-outline no-padding" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</section>
</div>