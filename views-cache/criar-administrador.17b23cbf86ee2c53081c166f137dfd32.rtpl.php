<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Criação de administrador</h2>
				</div>
			</div>
			<form method="POST" data-js="form">
				<div class="row">
					<div class="col-12">
						<div class="card mt-2 mb-4 bg-white">
							<div class="card-header">
								<h4>					
									<i class="fa fa-calendar"></i>
									Informe os dados
								</h4>
							</div>
							<div class="card-body px-4 py-4">
								<div class="form-group">
									<label for="nome">Nome: </label>
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" data-js="input">
								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="email">Email: </label>
										<input type="email" name="email" id="email" class="form-control" placeholder="Email" data-js="input">
									</div>
									<div class="form-group col-md-4">
										<label for="super_admin">Super Administrador</label>
										<select name="super_admin" id="super_admin" class="form-control" data-js="input">
											<option value="s">Sim</option>
											<option value="n">Não</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="senha">Senha: </label>
										<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" data-js="input">
									</div>
									<div class="form-group col-md-6">
										<label for="repetir_senha">Repetir Senha: </label>
										<input type="password" name="repetir_senha" id="repetir_senha" class="form-control" placeholder="Repetir Senha" data-js="input">
									</div>
								</div>	
								<div class="form-group ml-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="s" id="alterar_senha">
										<label class="form-check-label" for="alterar_senha">
											Alterar senha no próximo login
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center mt-2 mb-4">
							<button type="submit" class="btn btn-success">Cadastrar Administrador</button>
						</div> 
					</div>
				</div>
			</form>
		</div>