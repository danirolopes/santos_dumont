<div id="page-wrapper">
	<header id="header">
		<div class="container text-center">
			<h1>Seja Parceiro!</h1>
		</div>
	</header>

	<section id="empreendendo">
		<div class="row normal-margin">
			<div class="container">
				<div class="row normal-margin flex">
					<div class="col-sm-6">
						<h2>Empreendendo Sonhos</h2>
						<p class="textoPage">
							Às empresas, às instituições e ao governo que acreditam no investimento em educação como meio de crescimento eficaz e duradouro, a equipe Santos Dumont tem muito a agradecer. 
						</p>
						<p class="textoPage">
							O comprometimento com a responsabilidade social e a crença no acesso à educação de qualidade como um meio para a quebra do ciclo de pobreza no país fazem parte do perfil dos parceiros do Centro Educacional Santos Dumont. Essa visão diferenciada que os fizeram investir na causa possibilitaram sonhos que necessitaram de toda uma infraestrutura da sede, de muitos livros didáticos, da impressão de milhares de simulados e de apoio para inúmeras outras atividades administrativas do curso.  
						</p>
					</div>
					<div id="parceiroImage" class="col-sm-6 img-container">
						<img src="<?php echo URL;?>images/parceiroImage.png" class="img-responsive" />
						<h4 class="legendaImagem">Aula Inaugural 2017</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row normal-margin">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 queroAjudarDestaque">
					<p class="textoPage">
						Se sua empresa ou instituição crê no nosso trabalho e se encaixa nesse perfil de responsável pelo impacto social no país, entre em contato conosco.
					</p>
					<p class="textoPage">
						<span>Ficamos muito felizes com seu interesse em se tornar nosso parceiro!</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="sejaParceiro">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<form action="<?php echo URL;?>parceiro/interesseParceiro" method="POST">
                    
                    <div class="form-group">
                        <input class="form-control" name="nome" placeholder="Nome da Empresa" type="text" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                    	<input type="text" name="site" class="form-control" placeholder="Site da Empresa" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="telefone" placeholder="Telefone (com DDD)" type="text" required>
                    </div>
                    <div class="form-group">
                    	<textarea class="form-control" name="mensagem" cols="30" placeholder="Insira sua proposta para uma futura parceria com o curso" required rows="5"></textarea>	
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