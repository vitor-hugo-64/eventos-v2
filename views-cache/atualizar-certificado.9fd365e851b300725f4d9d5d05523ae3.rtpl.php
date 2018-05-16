<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Atualização de certificado</h2>
				</div>
			</div>
			<form method="POST" data-js="input">
				<div class="row">
					<div class="col-12">
						<div class="card mb-4 bbg-white">
							<div class="card-header">
								<span class="h4">
									<i class="fa fa-w fa-file"></i>
									Atualize as informações que desejar
								</span>
								<a href="atualizar-certificado.html" class="btn btn-success btn-sm float-right">Confirmar</a>
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
									<label for="corpo-certificado">Corpo do certificado: </label>
									<textarea name="corpo-certificado" id="corpo-certificado" class="form-control" placeholder="Corpo do certificado" data-js="input">Participou do nosso evento.</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
