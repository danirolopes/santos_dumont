<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<h1 class="text-center">Comprovante de Inscrição</h1>
		</div>
	</header>
	<br>
	<section>
		<div class="container">
			<h3 class="text-center">Consulte seu comprovante de inscrição:</h3>
			<div class="col-sm-6 col-sm-offset-3">
				<form method="POST">
					<div class="form-group">
						<input type="hidden" name="token-consulta-casdinho" value="<?php echo Session::get('token-consulta-casdinho');?>">
						<input type="text" class="form-control" name="RG" id="RG" placeholder="Digite seu RG" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Digite sua data de nascimento" />
					</div>
						<button class="btn btn-block btn-outline" type="submit">Fazer consulta</button>
				</form>
			</div>
		</div>
	</section>
	<br>
	<br>
	<?php if(isset($this->cartao)) {?>
	<?php if($this->cartao) {?>
	<section id="cartao">
		<div id="printframe" style="border: solid black 1px; margin: 0 10vh;">
			<div class="container text-center">
				<h2>Cartão de Confirmação de Inscrição</h2>
				<br>
				<h3>Vestibulinho <?php echo (date('Y')+1);?> - Casdinho</h3>
				<hr>
				<p>Imprima seu cartão de confirmação e o leve junto com a identidade informada no dia <?php echo $this->infos['data_vestibulinho_casdinho'];?></p>
				<br>
				<p>Endereço da prova: <?php echo $this->infos['local_vestibulinho_casdinho'];?></p>
				<br>
				<div class="table-container" style="overflow-x: auto;">
					<table id="cartao_confirmacao" border="solid 1px black" class="text-center" style="width: 90%; margin: 0 auto;">
						<thead>
							<tr>
								<th style="text-align: center;">Nº de inscrição</th>
								<th style="text-align: center;">Nome</th>
								<th style="text-align: center;">Data de Nascimento</th>
								<th style="text-align: center;">RG</th>
								<th style="text-align: center;">CPF</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo ($this->cartao['id']+170497);?></td>
								<td><?php echo ($this->cartao['nome'].' '.$this->cartao['sobrenome']);?></td>
								<td><?php echo ($this->cartao['nascimento']);?></td>
								<td><?php echo ($this->cartao['RG']);?></td>
								<td><?php if($this->cartao['CPF']){echo($this->cartao['CPF']);}else{echo('Não possui');}?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<br>
			</div>
		</div>
		<br>
		<div class="container text-center">
			<button class="btn btn-outline" style="background-color: #63CEFF;" id="btnPrint">Imprimir</button>
		</div>
	</section>
	<?php } else {?>
	<section>
		<div class="container text-center">
			Inscrição não encontrada!
		</div>
	</section>
	<?php }}?>
</div>