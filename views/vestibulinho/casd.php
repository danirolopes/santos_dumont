<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<div class="img-container">
				<img src="<?php echo URL;?>images/vestibulinhoCASDV.png" class="img-responsive"/>
			</div>
			<h1 class="text-center">Inscrições <?php echo(date('Y')+1); ?> </h1>
			<hr>
			<h3 class="text-center">Seja bem-vindo (a)! Se você está no 3º ano do Ensino Médio ou já o concluiu, independente de quantos anos tenha, você pode participar do nosso Vestibulinho e concorrer a uma das vagas do CASD Vestibulares (ou CASDVest, como é mais conhecido). O CASD, assim como o Casdinho, é um projeto do curso Centro Educacional Santos Dumont, o maior cursinho assistencialista do país.</h3>
			<br>
			<h2 class="text-center infos-vestibulinho"><strong>Neste ano, as inscrições ocorrerão até o dia <?php echo $this->infos['termino_vestibulinho_casd']?> e a prova ocorrerá em: <br> <?php echo $this->infos['local_vestibulinho_casd']?> no dia <?php echo $this->infos['data_vestibulinho_casd']?>.</strong></h2>
		</div>
	</header>
	<br>
	<br>
	<section id="inscricao">
		<div class="container">
			<?php if(!$this->erro === false) { ?>
			<div class="alert alert-danger col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">Erro ao realizar inscrição, tente novamente!</div>
			<?php } ?>
			<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="inscricao_container">
			<br>
				<form action="<?php echo URL;?>vestibulinho/confirmacao_casd" method="POST">
					<input type="hidden" name="token-vestibulinho" value="<?php echo(Session::get('token-vestibulinho'));?>">
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
						<label class="vestibulinhoLabel">CPF (apenas números)*</label>
						<p id="alert-cpf" style="color: red;"></p>
						<input class="form-control vestibulinhoForm" maxlength="11" type="text" name="CPF" id="CPF" required placeholder="Digite seu CPF*">
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
						<label class="vestibulinhoLabel">Nome do Responsável (se menor de 18 anos)</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="139" name="responsavel" id="responsavel" placeholder="Digite o nome do responsável">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Parentesco do Responsável</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="19" name="parentesco" id="parentesco" placeholder="Digite o parentesco de seu responsável">
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
						<label class="vestibulinhoLabel">Escolaridade*</label>
	                    <select class="form-control vestibulinhoForm" name="escolaridade" id="escolaridade" required>
	                    	<option value="" hidden disabled selected>Selecione sua escolaridade</option>
	                        <option value="medioCompleto">Ensino Médio Completo</option>
	                        <option value="cursando3ano">Cursando o 3º ano do Ensino Médio</option>
	                        <option value="cursando2ano">Cursando o 2º ano do Ensino Médio</option>
	                        <option value="outro">Outro</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tipo de Escola*</label>
	                    <select class="form-control vestibulinhoForm" name="tipoEscola" id="tipoEscola" required>
	                    	<option value="" hidden disabled selected>Selecione o tipo de escola que estuda ou que concluiu seu EM</option>
	                        <option value="particular">Particular</option>
	                        <option value="publicaFederal">Pública Federal</option>
	                        <option value="publicaEstadual">Pública Estadual</option>
	                        <option value="publicaMunicipal">Pública Municipal</option>
	                    </select>
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome da Escola* (Escola que estuda ou onde concluiu o ensino médio)</label>
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
						<label class="vestibulinhoLabel">Trabalha?*</label>
						<select class="form-control vestibulinhoForm" name="trabalha" id="trabalha" required>
	                    	<option value="" hidden disabled selected>Selecione uma opção</option>
	                        <option value="1">Sim</option>
	                        <option value="0">Não</option>
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
						<label class="vestibulinhoLabel">É ex-aluno?*</label>
						<select style="margin-bottom: 10px;" class="form-control vestibulinhoForm" id="exAluno_pre" required>
	                    	<option value="" hidden disabled selected>Selecione uma opção</option>
	                        <option value="sim" selected>Sim</option>
	                        <option value="nao">Não</option>
	                    </select>
	                    <select class="form-control vestibulinhoForm" name="exAluno" id="exAluno1" required>
	                    	<option value="" hidden disabled selected>Selecione o seu primeiro ano em que foi aluno</option>
	                        <option value="2017">2017</option>
	                        <option value="2016">2016</option>
	                        <option value="2015">2015</option>
	                        <option value="2014">2014</option>
	                        <option value="2013">2013</option>
	                        <option value="2012">2012</option>
	                        <option value="2011">2011</option>
	                        <option value="2010">2010</option>
	                        <option value="outro">Outro</option>
	                    </select>
	                    <select class="form-control vestibulinhoForm" id="exAluno2">
	                    	<option value="" hidden disabled selected>Selecione como conheceu o CASD Vestibulares</option>
	                        <option value="Cartaz">Cartaz em Ônibus</option>
	                        <option value="Email">E-mail</option>
	                        <option value="Facebook">Facebook ou outras redes sociais</option>
	                        <option value="IndicacaoAluno">Indicação de alunos/ex-alunos do CASD Vestibulates</option>
	                        <option value="IndicacaoConhecido">Indicação de conhecidos</option>
	                        <option value="IndicacaoVoluntario">Indicação de Voluntários</option>
	                        <option value="Internet">Internet</option>
	                        <option value="SiteBusca">Sites de Busca</option>
	                        <option value="TvRadioJornal">TV, rádio ou jornal</option>
	                        <option value="Visita">Visita do CASD à minha escola</option>
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
			                <option value="Negro">Preto</option>
			                <option value="Amarelo">Amarelo</option>
			                <option value="Indigena">Indígena</option>
			            </select>
					</div>
					<div class="form-group vestibulinho_item">
						<div class="checkbox">
						<label class="vestibulinhoLabel">
							<input type="checkbox" id="confirma-edital"> Declaro que li e concordo com o <strong><a href="<?php echo VESTIBULINHO_CASD_EDITAL_LINK; ?>">edital do Vestibulinho</a></strong> <?php echo(date('Y')+1);?> e que todas as informações aqui preenchidas são verdadeiras, <strong>sob pena de exclusão do processo seletivo</strong>. 
						</label>
						</div>
					</div>
					<div class="alert alert-danger" id="alert-final"></div>
					<button class="btn btn-outline btn-block" disabled id="submit-vestibulinho" type="submit">Inscrever!</button>
				</form>
				<br>
			</div>
		</div>
	</section>
</div>