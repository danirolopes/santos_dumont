<div id="page-wrapper">
	<header id="header">
		<div class="container">
			<h1 class="text-center">Inscrição Concluída com Sucesso!</h1>
			<hr>
			<h4>Abaixo está o seu cartão de inscrição, que deverá ser apresentado, junto com um documento de identificação, no dia da prova.</h4>
		</div>
	</header>
	<br>
	<section id="cartao">
		<div id="printframe" style="border: solid black 1px; margin: 0 10vh;">
			<div class="container text-center">
				<h2>Cartão de Confirmação de Inscrição</h2>
				<br>
				<h3>Vestibulinho <?php echo (date('Y')+1);?> - CASD Vestibulares</h3>
				<hr>
				<p>Imprima seu cartão de confirmação e o leve junto com a identidade informada no dia <?php echo $this->infos['data_vestibulinho_casd'];?></p>
				<br>
				<p>Endereço da prova: <?php echo $this->infos['local_vestibulinho_casd'];?></p>
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
								<td><?php echo ($this->cartao['CPF']);?></td>
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
</div>