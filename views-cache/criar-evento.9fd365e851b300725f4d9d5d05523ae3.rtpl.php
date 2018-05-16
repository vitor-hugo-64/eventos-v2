<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Criar evento</h2>
				</div>
			</div>
			<form method="POST" data-js="form">
				<div class="row">
					<div class="col-12">
						<div class="card mt-2 mb-4 bg-white">
							<div class="card-header">
								<h4>					
									<i class="fa fa-calendar"></i>
									Informe os dados do evento
								</h4>
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
									<select name="endereco" id="endereco" class="form-control" data-js="input" >
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
				<div class="row">
					<div class="col-12">
						<div class="card mb-4 bbg-white">
							<div class="card-header">
								<span class="h4">
									<i class="fa fa-w fa-file"></i>
									Informe os dados do certificado
								</span>
							</div>
							<div class="card-body px-4 py-4">
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label for="inicio_certificado">Incio: </label>
										<input type="text" name="inicio_certificado" id="inicio_certificado" class="form-control" value="Certificamos que" data-js="input">
									</div>
									<div class="form-group col-sm-6">
										<label>Nome do participante</label>
										<input type="text" class="form-control" value="Fulano de Tal" readonly>
									</div>
								</div>
								<div class="form-group">
									<label for="corpo-certificado">Corpo do certificado (não informe data e horário): </label>
									<textarea name="corpo-certificado" id="corpo-certificado" class="form-control" placeholder="Corpo do certificado" data-js="input">Participou do nosso evento.</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="text-center mb-4">
							<input type="submit" name="criar" id="criar" value="Criar evento" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>