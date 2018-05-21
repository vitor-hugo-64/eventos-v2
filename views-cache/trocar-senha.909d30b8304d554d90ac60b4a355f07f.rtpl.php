<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-fluid">
	<div class="row  justify-content-center">
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
			<div class="border rounded bg-white px-4 py-4 my-4">
				<div class="text-center">
					<img src="vendor/eventos/res/img/logo.png" class="img-fluid">
					<h3><?php echo htmlspecialchars( $admin["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
				</div>
				<form method="POST" action="/eventos-master/trocar-senha" data-js="form">
					<div class="form-group">
						<label for="senha">Senha: </label> 
						<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" data-js="input">
					</div>
					<div class="form-group">
						<label for="repetir_senha">Repita a Senha: </label> 
						<input type="password" name="repetir_senha" id="repetir_senha" class="form-control" placeholder="Repita a Senha" data-js="input">
					</div>
					<input type="submit" value="Trocar" class="btn btn-success btn-block">
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-danger" id="exampleModalLongTitle">Erro!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Desculpe, ocorreu um erro!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	alert('Voce deve alterar sua senha!');
</script>