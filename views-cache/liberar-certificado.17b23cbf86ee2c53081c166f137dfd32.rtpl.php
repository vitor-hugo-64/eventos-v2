<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="content-wrapper bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mt-2 mb-4">Liberação de certificados</h2>
				</div>
			</div>
			<form method="POST">
				<div class="row">
					<div class="col-12">
						<div class="card mt-4 mb-4">
							<div class="card-header">
								<span class="h4"><i class="fa fa-users"></i> Participantes cadastrados nesse evento</span>
								<input type="submit" name="concluir" id="concluir" value="concluir" class="btn btn-success btn-sm float-right">
							</div>
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item list-group-item-action">
										<div class="form-group pb-0 mb-0">
											<label for="participante1">Participante 1</label>
											<input type="checkbox" name="participante1" id="participante1" class="float-right">
										</div>
									</li>
									<li class="list-group-item list-group-item-action">
										<div class="form-group pb-0 mb-0">
											<label for="participante2">Participante 2</label>
											<input type="checkbox" name="participante2" id="participante2" class="float-right">
										</div>
									</li>
									<li class="list-group-item list-group-item-action">
										<div class="form-group pb-0 mb-0">
											<label for="participante3">Participante 3</label>
											<input type="checkbox" name="participante3" id="participante3" class="float-right">
										</div>
									</li>
									<li class="list-group-item list-group-item-action">
										<div class="form-group pb-0 mb-0">
											<label for="participante4">Participante 4</label>
											<input type="checkbox" name="participante4" id="participante4" class="float-right">
										</div>
									</li>
									<li class="list-group-item list-group-item-action">
										<div class="form-group pb-0 mb-0">
											<label for="participante5">Participante 5</label>
											<input type="checkbox" name="participante5" id="participante5" class="float-right">
										</div>
									</li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>