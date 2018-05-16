<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Atualização de evento</h2>
				</div>
			</div>
			<form method="POST" data-js="input">
				<div class="row">
					<div class="col-12">
						<div class="card mt-2 mb-4 bg-white">
							<div class="card-header">
								<span class="h4">					
									<i class="fa fa-calendar"></i>
									Atualize as informações que desejar
								</span>
								<a href="atualizar-evento.html" class="btn btn-success btn-sm float-right">Confirmar</a>
							</div>
							<div class="card-body px-4 py-4">
								<div class="form-group">
									<label for="nome_evento">Nome do evento: </label>
									<input type="text" name="nome_evento" id="nome_evento" class="form-control" placeholder="Nome do evento" data-js="input">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="data">Data: </label>
										<input type="date" name="data" id="data" class="form-control" placeholder="11/11/1111" data-js="input">
									</div>
									<div class="form-group col-md-6">
										<label for="hora">Hora: </label>
										<input type="time" name="hora" id="hora" class="form-control" placeholder="11:11" data-js="input">
									</div>
								</div>
								<div class="form-group">
									<label for="endereco">Endereço: </label>
									<select name="endereco" id="endereco" class="form-control" data-js="input">
										<option value="endereco">Endereço 1</option>
										<option value="endereco">Endereço 2</option>
										<option value="endereco">Endereço 3</option>
										<option value="endereco">Endereço 4</option>
										<option value="endereco">Endereço 5</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>