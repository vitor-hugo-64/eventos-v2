<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 mt-2 mb-4">
				<h2 class="text-center">Criaação de permissão de evento</h2>
			</div>
		</div>
		<form method="POST" data-js="form" action="/eventos-master/admin/event-permissions/create-event-permission">
			<div class="row">
				<div class="col-12">
					<div class="card mb-4  bg-white">
						<div class="card-header">
							<span class="h4"><i class="fa fa-table"></i> Informe os dados</span>
						</div>
						<div class="card-body  px-4 py-4">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="evento_acessado">Evento a ser acessado: </label>
									<select class="form-control" name="cod_evento" id="cod_evento" data-js="input">
										<?php $counter1=-1;  if( isset($events) && ( is_array($events) || $events instanceof Traversable ) && sizeof($events) ) foreach( $events as $key1 => $value1 ){ $counter1++; ?>
										<option value="<?php echo htmlspecialchars( $value1["cod_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descricao_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="admin-acessa">Administrador à ter acesso: </label>
									<select class="form-control" name="cod_administrador" id="cod_administrador" data-js="input">
										<?php $counter1=-1;  if( isset($admins) && ( is_array($admins) || $admins instanceof Traversable ) && sizeof($admins) ) foreach( $admins as $key1 => $value1 ){ $counter1++; ?>
										<option value="<?php echo htmlspecialchars( $value1["cod_administrador"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mb-4">
						<button class="btn btn-primary" type="submit">Adicionar permissão</button>
					</div>
				</div>
			</div>
		</form>
	</div>