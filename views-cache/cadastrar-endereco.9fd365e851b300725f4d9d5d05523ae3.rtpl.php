<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 mt-2 mb-4">
				<h2 class="text-center">Cadastrar endereço</h2>
			</div>
		</div>
		<form method="POST" data-js="form" action="/eventos-master/admin/enderecos/cadastrar-endereco">
			<div class="row">
				<div class="col-12">
					<div class="card mb-4  bg-white">
						<div class="card-header">
							<span class="h4"><i class="fa fa-table"></i> Informe os dados</span>
						</div>
						<div class="card-body  px-4 py-4">

							<div class="form-group">
								<label for="descricao">Nome do lugar: </label>
								<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Nome do lugar" data-js="input">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="rua">Rua: </label>
									<input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" data-js="input">
								</div>
								<div class="form-group col-md-2">
									<label for="numero">Nº: </label>
									<input type="number" name="numero" id="numero" class="form-control" placeholder="Número" data-js="input">
								</div>
								<div class="form-group col-md-4">
									<label for="bairro">Bairro: </label>
									<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" data-js="input">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="cidade">Cidade: </label>
									<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" data-js="input">
								</div>
								<div class="form-group col-md-2">
									<label for="estado">Estado: </label>
									<input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" maxlength="2" data-js="input">
								</div>
								<div class="form-group col-md-4">
									<label for="pais">País: </label>
									<input type="text" name="pais" id="pais" class="form-control" placeholder="País" data-js="input">
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mb-4">
						<button class="btn btn-primary" type="submit">Cadastrar endereço</button>
					</div>
				</div>
			</div>
		</form>
	</div>