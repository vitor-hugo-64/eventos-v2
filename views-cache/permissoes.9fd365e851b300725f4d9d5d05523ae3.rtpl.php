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
								Estas são todas as permissões
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
											<th scope="col">Evento Acessado</th>
											<th scope="col">Administrador</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>