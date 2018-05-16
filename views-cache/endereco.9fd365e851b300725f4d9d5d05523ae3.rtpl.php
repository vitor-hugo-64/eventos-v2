<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="text-center mt-2 mb-4">
						<h2>Nome do endereço</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<span class="h4"><i class="fa fa-info-circle"></i> Informações</span>
							<a class="btn btn-warning btn-sm float-right text-white" href="/eventos-master/admin/atualizar-endereco">Editar</a>
						</div>
						<div class="card-body">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="rua">Rua: </label>
										<input type="text" name="rua" id="rua" class="form-control" value="Nome da rua" readonly>
									</div>
									<div class="form-group col-md-2">
										<label for="numero">Número: </label>
										<input type="text" name="numero" id="numero" class="form-control" value="Número do lugar" readonly>
									</div>
									<div class="form-group col-md-4">
										<label for="bairro">Bairro: </label>
										<input type="text" name="bairro" id="bairro" class="form-control" value="Nome do bairro" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cidade">Cidade: </label>
										<input type="text" name="cidade" id="cidade" class="form-control" value="Nome da cidade" readonly>
									</div>
									<div class="form-group col-md-2">
										<label for="estado">Estado: </label>
										<input type="text" name="estado" id="estado" class="form-control" value="Número do estado" readonly>
									</div>
									<div class="form-group col-md-4">
										<label for="pais">País: </label>
										<input type="text" name="pais" id="pais" class="form-control" value="Nome do pas" readonly>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card mt-4 mb-4">
						<div class="card-header">
							<span class="h4"><i class="fa fa-map-marker"></i> Eventos nesse endereço</span>
						</div>
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item list-group-item-action">
									Evento 1
									<a href="evento.html" class="btn btn-primary btn-sm float-right">Visualizar</a>
								</li>
								<li class="list-group-item list-group-item-action">
									Evento 2
									<a href="evento.html" class="btn btn-primary btn-sm float-right">Visualizar</a>
								</li>
								<li class="list-group-item list-group-item-action">
									Evento 3
									<a href="evento.html" class="btn btn-primary btn-sm float-right">Visualizar</a>
								</li>
								<li class="list-group-item list-group-item-action">
									Evento 4
									<a href="evento.html" class="btn btn-primary btn-sm float-right">Visualizar</a>
								</li>
								<li class="list-group-item list-group-item-action">
									Evento 5
									<a href="evento.html" class="btn btn-primary btn-sm float-right">Visualizar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>