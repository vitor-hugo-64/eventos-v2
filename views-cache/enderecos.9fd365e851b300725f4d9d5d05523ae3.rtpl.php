<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="mt-2 mb-4">
					Lista de endereços
					<hr>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card mb-4">
					<div class="card-header">
						<span class="h4">
							<i class="fa fa-location-arrow"></i>
							Estes são os endereços já cadastrados
						</span>
						<a href="/eventos-master/admin/enderecos/cadastrar-endereco" class="btn btn-success btn-sm float-right btn-block-sm">
							<i class="fa fa-map-marker"></i> Adicionar
						</a>
					</div>
					<div class="card-body bg-white px-0 py-0">
						<div class="table-responsive">
							<table class="table mb-0">
								<thead>
									<tr>
										<th scope="col">
											<div class="ml-2">
												Descrição
											</div>
										</th>
										<th scope="col">Rua</th>
										<th scope="col">N°</th>
										<th scope="col">Bairro</th>
										<th scope="col">Cidade</th>
										<th scope="col">Estado</th>
										<th scope="col">País</th>
									</tr>
								</thead>
								<tbody>
									<?php $counter1=-1;  if( isset($address) && ( is_array($address) || $address instanceof Traversable ) && sizeof($address) ) foreach( $address as $key1 => $value1 ){ $counter1++; ?>
									<tr>
										<td>
											<div class="ml-2">
												<?php echo htmlspecialchars( $value1["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
											</div>
										</td>
										<td><?php echo htmlspecialchars( $value1["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["bairro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["pais"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td>
											<a href="/eventos-master/admin/enderecos/atualizar-endereco/<?php echo htmlspecialchars( $value1["cod_endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-sm float-right mr-2">
												<i class="fa fa-edit"></i> Editar
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
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
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-success" id="exampleModalLongTitle">Sucesso!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Administrador cadastrado com sucesso!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-warning" id="exampleModalLongTitle">Alerta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Já existe um administrador cadastrado com esse email!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning text-white" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-success" id="exampleModalLongTitle">Sucesso!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Alterações realizadas com sucesso!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-warning" id="exampleModalLongTitle">Sucesso!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Não é permitido fazer alterações em um super administrador!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-success" id="exampleModalLongTitle">Sucesso!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Senha alterada com sucesso!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>