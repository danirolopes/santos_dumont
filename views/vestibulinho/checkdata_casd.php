<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<div class="img-container">
				<img src="<?php echo URL;?>images/vestibulinhoCASDV.png" class="img-responsive"/>
			</div>
			<h1 class="text-center">Inscrições <?php echo(date('Y')+1); ?> </h1>
			<hr>
			<h3 class="text-center">Por favor, confirme os deus dados!</h3>
		</div>
	</header>
	<br>
	<br>
	<section id="inscricao">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="inscricao_container">
			<br>
				<form action="<?php echo URL;?>vestibulinho/confirmacao_casd" method="POST">
					<input type="hidden" name="token-vestibulinho" value="<?php echo(Session::get('token-vestibulinho'));?>">
					<input type="hidden" name="data-checked" value="1">
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome*</label>
						<input class="form-control vestibulinhoForm" maxlength="39" type="text" name="nome" id="nome" readonly value="<?php echo $_POST['nome'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Sobrenome*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="99" name="sobrenome" id="sobrenome" readonly value="<?php echo $_POST['sobrenome'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">RG*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="29" name="RG" id="RG" readonly value="<?php echo $_POST['RG'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">CPF (apenas números)*</label>
						<p id="alert-cpf" style="color: red;"></p>
						<input class="form-control vestibulinhoForm" maxlength="11" type="text" name="CPF" id="CPF" readonly value="<?php echo $_POST['CPF'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Sexo*</label>
	                    <input type="text" name="sexo" id="sexo" class="form-control vestibulinhoForm" readonly value="<?php echo $_POST['sexo'];?>">
	           		</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Data de Nascimento*</label>
						<input class="form-control vestibulinhoForm" type="text" name="nascimento" id="nascimento" readonly maxlength="10" value="<?php echo $_POST['nascimento'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome do Responsável (se menor de 18 anos)</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="139" name="responsavel" id="responsavel" readonly value="<?php if($this->responsavel){echo $_POST['responsavel'];}?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Parentesco do Responsável</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="19" name="parentesco" id="parentesco" readonly value="<?php if($this->parentesco){echo $_POST['parentesco'];}?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Telefone/Celular*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="24" name="telefone1" id="telefone1" readonly value="<?php echo $_POST['telefone1'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Telefone/Celular</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="24" name="telefone2" id="telefone2" readonly value="<?php if($this->telefone2){echo $_POST['telefone2'];}?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">E-mail*</label>
						<input class="form-control vestibulinhoForm" type="email" maxlength="49" name="email" id="email" readonly value="<?php echo $_POST['email'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">CEP (somente números)*</label>
						<input class="form-control vestibulinhoForm" type="text" name="cep" id="cep" maxlength="8" readonly value="<?php echo $_POST['cep'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Rua*</label>
						<input class="form-control vestibulinhoForm" type="text" name="rua" id="rua" size="60"   readonly value="<?php echo $_POST['rua'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Número*</label>
						<input class="form-control vestibulinhoForm" type="text" name="numero" id="numero" size="5" readonly value="<?php echo $_POST['numero'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Bairro*</label>
						<input class="form-control vestibulinhoForm" type="text" name="bairro" id="bairro" size="25"  readonly  value="<?php echo $_POST['bairro'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Cidade*</label>
						<input class="form-control vestibulinhoForm" type="text" name="cidade" id="cidade" size="25" readonly   value="<?php echo $_POST['cidade'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Estado*</label>
						<input class="form-control vestibulinhoForm" type="text" name="estado" id="estado" size="2"  readonly  value="<?php echo $_POST['estado'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tem Necessidade Especial?*</label>
						<input class="form-control vestibulinhoForm" type="text" maxlength="39" name="necessidade" id="necessidade" readonly value="<?php if($this->necessidade){echo $_POST['necessidade'];}else{echo 'Não';}?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Escolaridade*</label>
	                    <input type="text" class="form-control vestibulinhoForm" name="escolaridade" id="escolaridade" readonly value="<?php echo $_POST['escolaridade'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tipo de Escola*</label>
	                    <input type="text" class="form-control vestibulinhoForm" name="tipoEscola" id="tipoEscola" readonly value="<?php echo $_POST['tipoEscola'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Nome da Escola* (Escola que estuda ou onde concluiu o ensino médio)</label>
	                    <input type="text" class="form-control vestibulinhoForm" name="nomeEscola" id="nomeEscola" readonly value="<?php echo $_POST['nomeEscola'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Trabalha?*</label>
						<input type="text" class="form-control vestibulinhoForm" name="trabalha" id="trabalha" readonly value="<?php if($_POST['trabalha']){echo 'Sim';}else{echo 'Não';}?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Tem internet em casa?*</label>
						<input type="text" class="form-control vestibulinhoForm" name="internet" id="internet" readonly value="<?php if($_POST['internet']){echo 'Sim';}else{echo 'Não';}?>">
					</div>
					<input type="hidden" name="exAluno" id="exAluno" value="<?php echo $_POST['exAluno'];?>">
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Facebook*</label>
						<input class="form-control vestibulinhoForm" type="text" name="facebook" maxlength="119" id="facebook" list="facebook_option" readonly value="<?php echo $_POST['facebook'];?>">
					</div>
					<div class="form-group vestibulinho_item">
						<label class="vestibulinhoLabel">Cor/etnia*</label>
			            <input type="text" class="form-control vestibulinhoForm" name="cor" id="cor" readonly value="<?php echo $_POST['cor'];?>">
					</div>
					<div class="col-xs-6"><button class="btn btn-outline btn-block" id="submit-vestibulinho-datacheck" type="submit">Inscrever!</button></div>
					<div class="col-xs-6"><a class="btn btn-outline btn-block" id="voltar-vestibulinho-datacheck" href="<?php echo VESTIBULINHO_CASD_LINK;?>">Voltar!</a></div>
				</form>
				<br>
			</div>
		</div>
	</section>
</div>