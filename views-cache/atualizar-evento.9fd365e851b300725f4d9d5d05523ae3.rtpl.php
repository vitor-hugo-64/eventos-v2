<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Atualização de evento</h2>
				</div>
			</div>
			<form method="POST" data-js="input" action="/eventos-master/admin/eventos/atualizar-evento/<?php echo htmlspecialchars( $event["cod_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $event["inscricoes_abertas"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				<div class="row">
					<div class="col-12">
						<div class="card mt-2 mb-4 bg-white">
							<div class="card-header">
								<span class="h4">					
									<i class="fa fa-calendar"></i>
									Atualize as informações que desejar
								</span>
								<input type="submit" class="btn btn-success btn-sm float-right" value="Confirmar">
							</div>
							<div class="card-body px-4 py-4">
								<div class="form-group">
									<label for="nome_evento">Nome do evento: </label>
									<input type="text" name="descricao_evento" id="nome_evento" value="<?php echo htmlspecialchars( $event["descricao_evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="Nome do evento" data-js="input">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="data">Data: </label>
										<input type="date" name="data_realizacao" id="data" class="form-control" value="<?php echo htmlspecialchars( $event["data_realizacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="11/11/1111" data-js="input">
									</div>
									<div class="form-group col-md-6">
										<label for="hora">Hora: </label>
										<input type="time" name="hora" id="hora" value="<?php echo htmlspecialchars( $event["hora"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="11:11" data-js="input">
									</div>
								</div>
								<div class="form-group">
									<label for="endereco">Endereço: </label>
									<select name="cod_endereco" id="cod_endereco" class="form-control" data-js="input">
										<?php $counter1=-1;  if( isset($address) && ( is_array($address) || $address instanceof Traversable ) && sizeof($address) ) foreach( $address as $key1 => $value1 ){ $counter1++; ?>
											<option value="<?php echo htmlspecialchars( $value1["cod_endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
										<?php } ?>
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
										<input type="text" name="inicio_certificado" id="inicio_certificado" value="<?php echo htmlspecialchars( $event["texto_inicio_certificado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" data-js="input">
									</div>
									<div class="form-group col-sm-6">
										<label>Nome do participante</label>
										<input type="text" class="form-control" value="Fulano de Tal" readonly>
									</div>
								</div>
								<div class="form-group">
									<label for="corpo-certificado">Corpo do certificado (não informe data e horário): </label>
									<textarea name="corpo_certificado" id="corpo-certificado" class="form-control" placeholder="Corpo do certificado" data-js="input"><?php echo htmlspecialchars( $event["texto_corpo_certificado"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>