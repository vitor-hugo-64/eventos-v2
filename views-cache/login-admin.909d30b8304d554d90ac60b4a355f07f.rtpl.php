<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-fluid">
	<div class="row  justify-content-center">
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
			<div class="border rounded bg-white px-4 py-4 my-4">
				<div class="text-center">
					<img src="vendor/eventos/res/img/logo.png" class="img-fluid">
					<h1>Faça Login</h1>
				</div>
				<form method="POST" action="/eventos-master/" data-js="form">
					<div class="form-group">
						<label for="email">Email: </label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email" data-js="input">
					</div>
					<div class="form-group">
						<label for="senha">Senha: </label> 
						<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" data-js="input">
					</div>
					<div class="my-4">
						<a href="#">Esquesci minha senha</a>
					</div>
					<input type="submit" value="Logar" class="btn btn-success btn-block">
				</form>
			</div>
		</div>
	</div>
</div>