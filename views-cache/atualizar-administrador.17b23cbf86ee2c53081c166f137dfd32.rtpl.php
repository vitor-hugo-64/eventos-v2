<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Atualização de administrador</h2>
				</div>
			</div>
			<form method="POST" data-js="form" action="/eventos-master/admin/administradores/atualizar-administrador/<?php echo htmlspecialchars( $admin["cod_administrador"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				<div class="row">
					<div class="col-12">
						<div class="card mt-2 mb-4 bg-white">
							<div class="card-header">
								<span class="h4">					
									<i class="fa fa-user"></i>
									Atualize as informações que desejar
								</span>
								<input type="submit" value="confirmar" class="btn btn-success btn-sm float-right">
							</div>
							<div class="card-body px-4 py-4">
								<div class="form-group">
									<label for="nome">Nome: </label>
									<input type="nome" name="nome" id="nome" value="<?php echo htmlspecialchars( $admin["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="Nome" data-js="input">
								</div>
								<div class="form-group">
									<label for="email">Email: </label>
									<input type="email" name="email" id="email" value="<?php echo htmlspecialchars( $admin["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="Email" data-js="input">
								</div>
								<div class="form-group ml-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="s" id="super_admin" name="super_admin"<?php if( $admin["super_admin"] == 's' ){ ?>checked<?php } ?>>
										<label class="form-check-label" for="super_admin">
											Acesso de super administrador
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="s" id="trocar_senha" name="trocar_senha"<?php if( $admin["trocar_senha"] == 's' ){ ?>checked<?php } ?>>
										<label class="form-check-label" for="alterar_senha">
											Alterar senha no próximo login
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="s" id="conta_ativa" name="conta_ativa"<?php if( $admin["conta_ativa"] == 's' ){ ?>checked<?php } ?>>
										<label class="form-check-label" for="conta_ativa">
											Conta Ativa
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>