<?php if(!class_exists('Rain\Tpl')){exit;}?><body class="bg-dark fixed-nav sticky-footer" id="page-top">

	<!-- Navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-default" id="mainNav">
		<a href="/eventos-master/admin" class="navbar-brand">Nome do Administrador</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso" aria-expanded="false" aria-label="Navegação Toggle">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCurso" class="collapse navbar-collapse">
			<ul class="navbar-nav navbar-sidenav text-light" id="linkAdm">
				<li class="nav-item">
					<a class="nav-link nav-link-collapse collapse" href="#linksEndereco" data-toggle="collapse" data-parent="#linkAdm">
						<i class="fa fa-map-marker"></i>
						<span class="nav-link-text">Endereço</span>
					</a>
					<ul class="sidenav-second-level collapse" id="linksEndereco">
						<li>
							<a href="/eventos-master/admin/cadastrar-endereco">Cadastrar endereço</a>
						</li>
						<li>
							<a href="/eventos-master/admin/lista-enderecos">Lista de endereços</a>
						</li>	
					</ul>					
				</li>
				<li class="nav-item"> 
					<a class="nav-link nav-link-collapse collapse" href="#linksEvento" data-toggle="collapse" data-parent="#linkAdm">
						<i class="fa fa-calendar"></i>
						<span class="nav-link-text"> Evento</span>
					</a>
					<ul class="sidenav-second-level collapse" id="linksEvento">
						<li>
							<a href="/eventos-master/admin/criar-evento">Criar evento</a>
						</li>
						<li>
							<a href="/eventos-master/admin/lista-eventos">Lista de eventos</a>
						</li>	
					</ul>					
				</li>
				<li class="nav-item"> 
					<a class="nav-link nav-link-collapse collapse" href="#linksAdministrador" data-toggle="collapse" data-parent="#linkAdm">
						<i class="fa fa-user"></i>
						<span class="nav-link-text"> Administrador</span>
					</a>
					<ul class="sidenav-second-level collapse" id="linksAdministrador">
						<li>
							<a href="/eventos-master/admin/cadastrar-administrador">Cadastrar Administrador</a>
						</li>
						<li>
							<a href="/eventos-master/admin/lista-administradores">Lista de administradores</a>
						</li>
					</ul>					
				</li>													
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a href="#" id="sidenavToggler" class="nav-link text-center">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav">
					<a class="nav-link" href="#">
						<i class="fa fa-sign-out"></i>
						<span class="nav-link-text"> Sair</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
