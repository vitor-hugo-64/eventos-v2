<?php if(!class_exists('Rain\Tpl')){exit;}?><body class="bg-dark fixed-nav sticky-footer" id="page-top">

	<!-- Navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-default" id="mainNav">
		<a href="/eventos-master/admin" class="navbar-brand"><?php echo htmlspecialchars( $admin["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso" aria-expanded="false" aria-label="Navegação Toggle">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCurso" class="collapse navbar-collapse">
			<ul class="navbar-nav navbar-sidenav text-light" id="linkAdm">
				<li class="nav-item"> 
					<a class="nav-link" href="/eventos-master/admin/enderecos">
						<i class="fa fa-map-marker"></i>
						<span class="nav-link-text">Endereços</span>
					</a>
				</li>
				<li class="nav-item"> 
					<a class="nav-link" href="/eventos-master/admin/eventos">
						<i class="fa fa-calendar"></i>
						<span class="nav-link-text">Eventos</span>
					</a>
				</li>				
				<?php if( $admin["super_admin"] == 's' ){ ?>													
				<li class="nav-item"> 
					<a class="nav-link nav-link-collapse collapse" href="#linksAdministrador" data-toggle="collapse" data-parent="#linkAdm">
						<i class="fa fa-user"></i>
						<span class="nav-link-text"> Administrador</span>
					</a>
					<ul class="sidenav-second-level collapse" id="linksAdministrador">
						<li>
							<a href="/eventos-master/admin/administradores">Lista de administradores</a>
						</li>
						<li>
							<a href="/eventos-master/admin/event-permissions">Permissões de evento</a>
						</li>
					</ul>					
				</li>
				<?php } ?>
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a href="#" id="sidenavToggler" class="nav-link text-center">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
<!-- 				<li class="nav  d-sm-block d-md-block">
					<div class="btn-group nav-link">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-fw fa-bell"></i>
							<span class="d-lg-none d-xl-none">Notificações</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<h6 class="dropdown-header">Novas Notificações</h6>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item text-success">Novo cadastro de evento</a>
							<a href="#" class="dropdown-item text-danger">Inscrições do evento encerradas</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item small">Ver mais</a>
						</div>
					</div>
				</li> -->
				<li class="nav  d-sm-block d-md-block">
					<div class="btn-group nav-link">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user-circle"></i>
							<span class="d-lg-none d-xl-none">Usuário</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<h6 class="dropdown-header">Conta</h6>
							<!-- <a href="#" class="dropdown-item"> Perfil </a> -->
							<a href="/eventos-master/admin/logout" class="dropdown-item"> Sair </a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</nav>
