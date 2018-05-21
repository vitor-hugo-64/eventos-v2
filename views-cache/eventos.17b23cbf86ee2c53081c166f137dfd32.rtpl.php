<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="mt-2 mb-4">
						Lista de Eventos
						<hr>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<span class="h4">
								<i class="fa fa-location-arrow"></i>
								Estes são os seus eventos e os que você tem acesso
							</span>
							<a href="/eventos-master/admin/eventos/criar-evento" class="btn btn-success btn-sm float-right btn-block-sm">
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
											<th scope="col">Data Realização</th>
											<th scope="col">Endereco</th>
											<th scope="col">Administrador</th>
										</tr>
									</thead>
									<tbody>
										<?php $counter1=-1;  if( isset($events) && ( is_array($events) || $events instanceof Traversable ) && sizeof($events) ) foreach( $events as $key1 => $value1 ){ $counter1++; ?>
										<tr>
											<td>
												<div class="ml-2">
													<?php echo htmlspecialchars( $value1["descricao_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
												</div>
											</td>
											<td><?php echo htmlspecialchars( $value1["data_realizacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
											<td><?php echo htmlspecialchars( $value1["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
											<td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
											<td>
												<a href="/eventos-master/admin/eventos/atualizar-evento/<?php echo htmlspecialchars( $value1["cod_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-sm float-right mr-2">
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