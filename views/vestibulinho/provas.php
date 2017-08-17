<div id="page-wrapper">
	<div id="header">
		<h1 class="text-center">Provas Antigas <?php echo $this->prova;?></h1>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" id="provas-container">
			<?php
				foreach ($this->files as $file) 
				{
					echo '<li class="item-provas"><a href='.URL.'vestibulinho/download'.$this->prova.'/'.rtrim($file, '.pdf').'><i class="fa fa-file-pdf-o" aria-hidden="true"></i> '.$file.'</a></li>';
				}
			?>
		</div>
	</div>
</div>