<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Nome do administrador</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card mt-2 mb-4 bg-white">
						<div class="card-header">
							<span class="h4">					
								<i class="fa fa-user"></i>
								Informações do administrador
							</span>
							<a href="/eventos-master/admin/atualizar-administrador" class="btn btn-warning btn-sm float-right text-white">Editar</a>
						</div>
						<div class="card-body px-4 py-4">
							<div class="form-row">
								<div class="form-group col-md-8">
									<label for="email">Email: </label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" data-js="input" readonly>
								</div>
								<div class="form-group col-md-4">
									<label for="super_admin">Super Administrador</label>
									<input type="text" name="super_admin" id="super_admin" value="sim" class="form-control" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>