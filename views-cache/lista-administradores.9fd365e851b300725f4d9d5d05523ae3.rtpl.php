<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
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
					<div class="card">
						<div class="card-header">
							<span class="h4">
								<i class="fa fa-users"></i>
								Estes são os administradores já cadastrados
							</span>
							<a href="/eventos-master/admin/cadastrar-administrador" class="btn btn-success btn-sm float-right mr-2 btn-block-sm">Adicionar</a>
						</div>
						<div class="card-body bg-white">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Administrador 1</td>
											<td>email@email.com.br</td>
											<td>
												<a href="/eventos-master/admin/desativar-administrador" class="btn btn-danger btn-sm float-right ml-1">Desativar</a>
												<a href="/eventos-master/admin/atualizar-administrador" class="btn btn-primary btn-sm float-right">Editar</a>
											</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Administrador 2</td>
											<td>email@email.com.br</td>
											<td>
												<a href="/eventos-master/admin/desativar-administrador" class="btn btn-danger btn-sm float-right ml-1">Desativar</a>
												<a href="/eventos-master/admin/atualizar-administrador" class="btn btn-primary btn-sm float-right">Editar</a>
											</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Administrador 3</td>
											<td>email@email.com.br</td>
											<td>
												<a href="/eventos-master/admin/desativar-administrador" class="btn btn-danger btn-sm float-right ml-1">Desativar</a>
												<a href="/eventos-master/admin/atualizar-administrador" class="btn btn-primary btn-sm float-right">Editar</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>