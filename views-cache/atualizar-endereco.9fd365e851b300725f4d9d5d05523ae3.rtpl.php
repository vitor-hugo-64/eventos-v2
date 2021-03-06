<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mt-2 mb-4">
					<h2 class="text-center">Atualizar informações</h2>
				</div>
			</div>
			<form method="POST" data-js="form" action="/eventos-master/admin/enderecos/atualizar-endereco/<?php echo htmlspecialchars( $address["cod_endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				<div class="row">
					<div class="col-12">
						<div class="card  bg-white">
							<div class="card-header">
								<span class="h4"><i class="fa fa-edit"></i> Atualize os campos necessários</span>
								<input type="submit" class="btn btn-success btn-sm float-right" value="Confirmar">
							</div>
							<div class="card-body  px-4 py-4">

								<div class="form-group">
									<label for="descricao">Nome do lugar: </label>
									<input type="text" name="descricao" id="descricao" value="<?php echo htmlspecialchars( $address["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="Nome do lugar" data-js="input">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="rua">Rua: </label>
										<input type="text" name="rua" id="rua" value="<?php echo htmlspecialchars( $address["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="Rua" data-js="input">
									</div>
									<div class="form-group col-md-2">
										<label for="numero">Nº: </label>
										<input type="number" name="numero" id="numero" value="<?php echo htmlspecialchars( $address["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="00" data-js="input">
									</div>
									<div class="form-group col-md-4">
										<label for="bairro">Bairro: </label>
										<input type="text" name="bairro" id="bairro" value="<?php echo htmlspecialchars( $address["bairro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="Bairro" data-js="input">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cidade">Cidade: </label>
										<input type="text" name="cidade" id="cidade" value="<?php echo htmlspecialchars( $address["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="Cidade" data-js="input">
									</div>
									<div class="form-group col-md-2">
										<label for="estado">Estado: </label>
										<input type="text" name="estado" id="estado" value="<?php echo htmlspecialchars( $address["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="RS" maxlength="2" data-js="input">
									</div>
									<div class="form-group col-md-4">
										<label for="pais">País: </label>
										<input type="text" name="pais" id="pais" value="<?php echo htmlspecialchars( $address["pais"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" value="País" data-js="input">
									</div>
								</div>

							</div>
						</div>
					</div>
				</form>
			</div>
		</div>