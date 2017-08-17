<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<div class="img-container">
				<img src="<?php echo URL;?>images/vestibulinhocasdinho.png" class="img-responsive"/>
			</div>
			<h1 class="text-center">Inscrições <?php echo(date('Y')+1); ?> </h1>
			<hr>
			<h3 class="text-center">Seja bem-vindo (a)! Se você está no 7º ou 8º ano do Ensino Fundamental, você pode participar do nosso Vestibulinho e concorrer a uma das vagas do Casdinho. O Casdinho prepara gratuitamente seuas alunos para ingressar em escolas de Ensino Médio de qualidade. E, assim como o CASDVest, é um projeto do curso Centro Educacional Santos Dumont, o maior cursinho assistencialista do país.</h3>
			<br>
			<h2 class="text-center infos-vestibulinho"><strong>Neste ano, as inscrições ocorrerão até o dia <?php echo $this->infos['termino_vestibulinho_casdinho']?> e a prova ocorrerá em: <br> <?php echo $this->infos['local_vestibulinho_casdinho']?> no dia <?php echo $this->infos['data_vestibulinho_casdinho']?>.</strong></h2>
		</div>
	</header>
	<br>
	<br>
	<section id="inscricao">
		<div class="container">
			<?php if(!$this->erro === false) { ?>
			<div class="alert alert-danger col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">Erro ao realizar inscrição, tente novamente!</div>
			<?php } ?>
			<form action="<?php echo URL;?>vestibulinho/confirmacao_casdinho" method="POST">
				<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="inscricao_container">
				<br>				
					<input type="hidden" name="token-vestibulinho-casdinho" value="<?php echo(Session::get('token-vestibulinho-casdinho'));?>">
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome* <span style="font-size: 12px; color: red;">(Dados marcados com * são de preenchimento obrigatório)</span></label>
						<input class="form-control vestibulinhoForm" maxlength="39" type="text" name="nome" id="nome" required placeholder="Digite seu nome*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Sobrenome*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="99" name="sobrenome" id="sobrenome" required placeholder="Digite seu sobrenome*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">RG*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="29" name="RG" id="RG" required placeholder="Digite seu RG*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">CPF (apenas números)</label>
						<p id="alert-cpf" style="color: red;"></p>
						<input class="form-control vestibulinhoForm" maxlength="11" type="text" name="CPF" id="CPF" placeholder="Digite seu CPF">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Sexo*</label>
	                    <select name="sexo" id="sexo" class="form-control vestibulinhoForm" required>
	                    	<option value="" hidden disabled selected>Selecione uma opção</option>
	                        <option value="F">Feminino</option>
	                        <option value="M">Masculino</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Data de Nascimento*</label>
						<p id="alert-nascimento" style="color: red;"></p>
						<input class="form-control vestibulinhoForm" type="text" name="nascimento" id="nascimento" required maxlength="10" placeholder="Digite sua data de Nascimento* (DD/MM/AAAA)">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome do Responsável*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="139" name="responsavel" id="responsavel" required placeholder="Digite o nome do responsável*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Parentesco do Responsável*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="19" name="parentesco" id="parentesco" placeholder="Digite o parentesco de seu responsável*" required>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Telefone/Celular*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="24" name="telefone1" id="telefone1" required placeholder="Digite seu telefone/celular*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Telefone/Celular</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="24" name="telefone2" id="telefone2" placeholder="Digite seu telefone/celular">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">E-mail*</label>
						<input class="form-control vestibulinhoForm" type="email" maxlength="49" name="email" id="email" required placeholder="Digite seu e-mail*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">CEP (somente números)*</label>
						<p id="alert-cep" style="color: red;"></p>
						<input class="form-control vestibulinhoForm" type="text" name="cep" id="cep" maxlength="8" required placeholder="Digite seu CEP* (apenas números)" list="cep_option">
						<datalist id="cep_option">
						  <option value="Sem CEP" id="sem_cep">Não tenho CEP</option>
						</datalist>
						<p>Se não sabe seu cep, <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/">descubra aqui.</a></p>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Rua*</label>
						<input class="form-control vestibulinhoForm" type="text" name="rua" id="rua" size="60"  readonly required>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Número*</label>
						<input class="form-control vestibulinhoForm" type="text" name="numero" id="numero" size="5" required placeholder="Digite o número de sua casa*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Bairro*</label>
						<input class="form-control vestibulinhoForm" type="text" name="bairro" id="bairro" size="25"  readonly required>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Cidade*</label>
						<input class="form-control vestibulinhoForm" type="text" name="cidade" id="cidade" size="25" readonly  required>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Estado*</label>
						<input class="form-control vestibulinhoForm" type="text" name="estado" id="estado" size="2"  readonly required>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tem Necessidade Especial?*</label>
						<select class="form-control vestibulinhoForm" id="necessidade_pre" required>
	                    	<option value="" hidden disabled selected>Selecione uma opção</option>
	                        <option value="nao">Não</option>
	                        <option value="sim">Sim</option>
	                    </select>
						<input style="margin-top: 10px;" class="form-control vestibulinhoForm" type="hidden" maxlength="39" name="necessidade" id="necessidade" placeholder="Digite sua necessidade especial*">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Cursando qual ano?*</label>
	                    <select class="form-control vestibulinhoForm" name="serie" id="serie" required>
	                    	<option value="" hidden disabled selected>Selecione o ano que está cursando</option>
	                        <option value="7">7º ano</option>
	                        <option value="8">8º ano</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tipo de Escola*</label>
	                    <select class="form-control vestibulinhoForm" name="tipoEscola" id="tipoEscola" required>
	                    	<option value="" hidden disabled selected>Selecione o tipo de escola em que estuda</option>
	                        <option value="particular">Particular</option>
	                        <option value="publicaFederal">Pública Federal</option>
	                        <option value="publicaEstadual">Pública Estadual</option>
	                        <option value="publicaMunicipal">Pública Municipal</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome da Escola*</label>
	                    <select class="form-control vestibulinhoForm" name="nomeEscola" id="nomeEscola" required>
	                    	<option value="" hidden disabled selected>Selecione a escola</option>
	                    	<?php foreach ($this->escolas as $key => $nome) {
	                    		echo '<option value="'.$nome.'">'.$nome.'</option>';
	                    	}

	                    	?>
	                    	<option value="outra">Outra</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tem internet em casa?*</label>
						<select class="form-control vestibulinhoForm" name="internet" id="internet" required>
	                    	<option value="" hidden disabled selected>Selecione uma opção</option>
	                        <option value="1">Sim</option>
	                        <option value="0">Não</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Como conheceu o Casdinho?*</label>
	                    <select class="form-control vestibulinhoForm" id="conheceu" name="conheceu">
	                    	<option value="" hidden disabled selected>Selecione como conheceu o Casdinho</option>
	                        <option value="Cartaz">Cartaz em Ônibus</option>
	                        <option value="Email">E-mail</option>
	                        <option value="Facebook">Facebook ou outras redes sociais</option>
	                        <option value="IndicacaoAluno">Indicação de alunos/ex-alunos do Casdinho</option>
	                        <option value="IndicacaoConhecido">Indicação de conhecidos</option>
	                        <option value="IndicacaoVoluntario">Indicação de Voluntários</option>
	                        <option value="Internet">Internet</option>
	                        <option value="SiteBusca">Sites de Busca</option>
	                        <option value="TvRadioJornal">TV, rádio ou jornal</option>
	                        <option value="Visita">Visita do Casdinho à minha escola</option>
	                        <option value="Outros">Outros</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Facebook*</label>
						<input class="form-control vestibulinhoForm" type="text" name="facebook" maxlength="119" id="facebook" list="facebook_option" required placeholder="Digite o link do perfil*">
						<datalist id="facebook_option">
						  <option value="Nao tenho Facebook">Não tenho Facebook</option>
						</datalist>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Cor/etnia*</label>
			            <select class="form-control vestibulinhoForm" name="cor" id="cor" required>
	                    	<option value="" hidden disabled selected>Selecione sua cor/etnia</option>
			                <option value="Branco">Branco</option>
			                <option value="Pardo">Pardo</option>
			                <option value="Preto">Preto</option>
			                <option value="Amarelo">Amarelo</option>
			                <option value="Indigena">Indígena</option>
			            </select>
					</div>
				</div>

				<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="dados_socioeconomicos_container">
					<h1 id="socioeconomico_title" class="text-center">Questionário Socioeconômico</h1>
					<p id="socioeconomico_explicacao">Candidato, a seguir estão algumas perguntas sobre seu domicílio para efeito de pesquisa socioeconômica. Todos os itens de eletroeletrônicos citados devem estar funcionando, incluindo os que estão guardados. Caso não estejam funcionando, considere apenas se tiver intenção de consertar ou repor nos próximos seis meses.</p>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de automóveis de passeio exclusivamente para uso particular*</label>
	                    <select class="form-control vestibulinhoForm" name="automoveis" id="automoveis" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de automóveis</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de empregados, considerando apenas os que trabalham pelo menos 5 dias por semana*</label>
	                    <select class="form-control vestibulinhoForm" name="empregados" id="empregados" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de empregados</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de máquinas de lavar roupa, excluindo tanquinho*</label>
	                    <select class="form-control vestibulinhoForm" name="maquinas" id="maquinas" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de máquinas de lavar roupa</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de banheiros*</label>
	                    <select class="form-control vestibulinhoForm" name="banheiros" id="banheiros" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de banheiros</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de DVDs, incluido qualquer dispositivo que leia DVDs e excluindo DVD de automóvel*</label>
	                    <select class="form-control vestibulinhoForm" name="dvds" id="dvds" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de DVDs</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de geladeiras*</label>
	                    <select class="form-control vestibulinhoForm" name="geladeiras" id="geladeiras" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de geladeiras</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de freezers independentes ou parte da geladeira duplex*</label>
	                    <select class="form-control vestibulinhoForm" name="freezers" id="freezers" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de freezers</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de microcomputadores, considerando computadores de mesa, laptops, notebooks e netbooks e desconsiderando tablets, palms ou smartphones*</label>
	                    <select class="form-control vestibulinhoForm" name="computadores" id="computadores" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de computadores</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de lavadoras de louça*</label>
	                    <select class="form-control vestibulinhoForm" name="lavaloucas" id="lavaloucas" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de lava louças</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de fornos de micro-ondas*</label>
	                    <select class="form-control vestibulinhoForm" name="microondas" id="microondas" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de microondas</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de motocicletas, desconsiderando as usadas exclusivamente para uso profissional*</label>
	                    <select class="form-control vestibulinhoForm" name="motocicletas" id="motocicletas" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de motocicletas</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Quantidade de máquinas secadoras de roupas, considerando lava e seca*</label>
	                    <select class="form-control vestibulinhoForm" name="secadoras" id="secadoras" required>
	                    	<option value="" hidden disabled selected>Selecione a quantidade de secadoras</option>
	                        <option value="0">Não possui</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4 ou mais</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">A água utilizada no domicílio é proveniente de:</label>
	                    <select class="form-control vestibulinhoForm" name="agua" id="agua" required>
	                    	<option value="" hidden disabled selected>Selecione de onde vem a água de sua casa</option>
	                        <option value="distribuicao">Rede geral de distribuição</option>
	                        <option value="poconascente">Poço ou nascente</option>
	                        <option value="outro">Outro meio</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Considerando o trecho da rua do seu domicílio, a rua é:*</label>
	                    <select class="form-control vestibulinhoForm" name="pavimentacao" id="pavimentacao" required>
	                    	<option value="" hidden disabled selected>Selecione a situação da rua onde mora</option>
	                        <option value="asfaltada">Asfaltada/Pavimentada</option>
	                        <option value="terra">Terra/Cascalho</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Qual é o grau de instrução do chefe da família? Considere como chefe da família a pessoa que contribui com a maior parte da renda do domicílio.</label>
	                    <select class="form-control vestibulinhoForm" name="escolaridade_chefe" id="escolaridade_chefe" required>
	                    	<option value="" hidden disabled selected>Selecione o grau de escolaridade do chefe de família</option>
	                        <option value="analfabeto">Analfabeto/Fundamental I incompleto</option>
	                        <option value="fundincompleto">Fundamental I completo/Fundamental II incompleto</option>
	                        <option value="medioincompleto">Fundamental completo/Médio incompleto</option>
	                        <option value="superiorincompleto">Médio completo/Superior incompleto</option>
	                        <option value="superiorcompleto">Superior completo</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<div class="checkbox">
						<label class="vestibulinhoLabel">
							<input type="checkbox" id="confirma-edital"> Declaro que li e concordo com o <strong><a href="<?php echo VESTIBULINHO_CASDINHO_EDITAL_LINK; ?>">edital do Vestibulinho</a></strong> <?php echo(date('Y')+1);?> e que todas as informações aqui preenchidas são verdadeiras, <strong>sob pena de exclusão do processo seletivo</strong>. 
						</label>
						</div>
					</div>
					<div class="alert alert-danger" id="alert-final"></div>
					<button class="btn btn-outline btn-block" disabled id="submit-vestibulinho" type="submit">Inscrever!</button>
					<br>
				</div>
			</form>
		</div>
	</section>
</div>