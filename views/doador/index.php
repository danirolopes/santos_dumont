<div id="page-wrapper">
	<header id="header">
		<div class="container text-center">
			<h1>Seja um Amigo do Dumont!</h1>
		</div>
	</header>

	<section id="transformacao">
		<div class="container">
			<div class="row normal-margin flex">
				<div class="col-sm-6">
					<h2>Invista na Transformação!</h2>
					<p class="textoPage">
						O Centro Educacional Santos Dumont, que até hoje já transformou a vida de incontáveis estudantes de baixa renda que sonharam por um ensino de melhor qualidade, seja Ensino Médio ou Superior, só pôde alcançar tais conquistas graças a seus investidores, pessoas que acreditam no potencial de cada um dos voluntários que se dedicam de corpo e alma a apoiar os alunos do curso e, principalmente, no potencial de cada jovem que se esforça e busca o crescimento constante rumo à realização de seu objetivo. 
					</p>
					<p class="textoPage">
						Somos o que somos por causa de centenas de pessoas, empresas e organizações que depositaram a confiança em nosso trabalho nesses 18 anos de funcionamento. Por isso, para garantir a fidelidade de apoiadores, o nosso compromisso com a transparência e com o profissionalismo se faz presente em todas as ações do curso.
					</p>
					<h2>Como Funciona?</h2>
					<p class="textoPage">
						Ao se juntar a nossa rede de Amigos do Dumont, no ato do cadastro, o benfeitor passa a contribuir mensalmente com a instituição, através de débito automático com o PagSeguro. A partir de então, o doador passa a receber informativos e feedbacks regulares sobre as atividades de organização do curso, além de ser sempre convidado a participar e se envolver com os eventos de organização.
					</p>
				</div>
				<div id="doadorImage" class="col-sm-6">
					<div class=" img-container">
						<img src="<?php echo URL;?>images/amigosDoDumont.png" class="img-responsive" />
					</div>
					<h4 class="legendaImagem">Divulgação do Amigos do Dumont na Aula Inaugural 2017</h4>
				</div>
			</div>
		</div>
	</section>
	<section id="doar">
		<div class="row normal-margin">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 queroAjudarDestaque">
				<p class="textoPage">
					Se também acredita na educação como um fator de mudança social e que o seu acesso é um direito de todos, você se encaixa na rede de doadores fidelizados à nossa causa.
				</p>
				<p class="textoPage">
					<span>Venha fazer parte do Programa Amigos do Dumont!</span>
				</p>
			</div>
		</div>
		<div class="row text-center normal-margin" id="pagSeguro">
			<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
				<form action="<?php echo URL;?>doador/pagSeguro" target="_blank" method="post">
				<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
					<div class="form-group">
						<input type="number" name="quantia" min="0.00" max="10000.00" step="0.01" placeholder="Quantia mensal" class="form-control" required />
					</div>
					<div class="img-container">
						<input type="image"  id="pagSeguroButton" class="img-responsive img-responsive-fullwidth" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
					</div>
				</form>
			</div>
			<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
		</div>
	</section>
</div>