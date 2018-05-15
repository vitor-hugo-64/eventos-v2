<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mt-2 mb-4">
					<h2 class="text-center">Atualizar informações</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card  bg-white">
						<div class="card-header">
							<span class="h4"><i class="fa fa-edit"></i> Atualize os campos necessários</span>
							<a href="#" class="btn btn-success btn-sm float-right">Confirmar</a>
						</div>
						<div class="card-body  px-4 py-4">
							<form method="POST" data-js="form">
								<div class="form-group">
									<label for="nome_lugar">Nome do lugar: </label>
									<input type="text" name="nome_lugar" id="nome_lugar" class="form-control" value="Nome do lugar" data-js="input">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="rua">Rua: </label>
										<input type="text" name="rua" id="rua" class="form-control" value="Rua" data-js="input">
									</div>
									<div class="form-group col-md-2">
										<label for="numero">Nº: </label>
										<input type="number" name="numero" id="numero" class="form-control" value="00" data-js="input">
									</div>
									<div class="form-group col-md-4">
										<label for="bairro">Bairro: </label>
										<input type="text" name="bairro" id="bairro" class="form-control" value="Bairro" data-js="input">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cidade">Cidade: </label>
										<input type="text" name="cidade" id="cidade" class="form-control" value="Cidade" data-js="input">
									</div>
									<div class="form-group col-md-2">
										<label for="estado">Estado: </label>
										<input type="text" name="estado" id="estado" class="form-control" value="RS" maxlength="2" data-js="input">
									</div>
									<div class="form-group col-md-4">
										<label for="pais">País: </label>
										<input type="text" name="pais" id="pais" class="form-control" value="País" data-js="input">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>