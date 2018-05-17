<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center mt-2 mb-4">
					Lista de administradores
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card mb-4">
					<div class="card-header">
						<span class="h4">
							<i class="fa fa-users"></i>
							Estes são os administradores já cadastrados
						</span>
						<a href="/eventos-master/admin/administradores/cadastrar-administrador" class="btn btn-success btn-sm float-right btn-block-sm">
							<i class="fa fa-user-plus"></i> Adicionar
						</a>
					</div>
					<div class="card-body bg-white px-2">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<?php $counter1=-1;  if( isset($admins) && ( is_array($admins) || $admins instanceof Traversable ) && sizeof($admins) ) foreach( $admins as $key1 => $value1 ){ $counter1++; ?>
									<tr>
										<th scope="row">
											<?php if( $value1["conta_ativa"] == 's' ){ ?>
											<span class="text-success"><i class="fa fa-user"></i></span>
											<?php }else{ ?>
											<span class="text-danger"><i class="fa fa-user"></i></span>
											<?php } ?>
										</th>
										<td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
										<td>
											<button type="button" class="btn btn-secondary btn-sm float-right ml-2" data-toggle="modal" data-target="#trocarSenha" data-whatever="@mdo">
												<i  class="fa fa-unlock"></i>
												Trocar senha
											</button>
											<a href="/eventos-master/admin/administradores/atualizar-administrador/<?php echo htmlspecialchars( $value1["cod_administrador"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-sm float-right">
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
	<div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
	<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-success" id="exampleModalLongTitle">Sucesso!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Admnistrador cadastrado com sucesso!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

	<div class="modal fade" id="trocarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Trocar Senha</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="#" data-js="form">
					<div class="modal-body">

						<div class="form-group">
							<label for="senha">Senha: </label>
							<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" data-js="input">
						</div>
						<div class="form-group">
							<label for="repita_senha">Repita senha: </label>
							<input type="password" name="repita_senha" id="repita_senha" class="form-control" placeholder="Repita Senha" data-js="input">
						</div>
						<div class="form-group ml-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="s" id="alterar_senha" name="alterar_senha">
								<label class="form-check-label" for="alterar_senha">
									Alterar senha no próximo login
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" name="alterar" value="Confirmar" class="btn btn-success">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>