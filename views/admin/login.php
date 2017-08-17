<div class="container" id="page-wrapper">
	<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
		<h1 class="text-center" id="login-title">Login</h1>
		<br>
		<form method="POST">
		<input type="hidden" name="token-admin-login" value="<?php echo Session::get('token-admin-login');?>" />
		<div class="form-group">
			<input class="form-control" type="text" name="username" placeholder="Username" />
			</div>
		<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Senha" />
		</div>
			<button class="btn btn-outline btn-block" type="submit">Entrar</button>
		</form>
	</div>
</div>