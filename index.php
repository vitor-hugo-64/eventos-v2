<?php

require 'vendor/autoload.php';

use \Slim\Slim;
use \Eventos\PageAdmin;
use \Eventos\Model\Admin;

$app = new Slim();

$app->get( '/', function ()
{
	echo "Olá Mundo!";
});

$app->get( '/admin', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-um', 'barra-navegacao', 'index', 'rodape-um'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/administradores', function ()
{
	$pageAdmin = new PageAdmin();
	$admins = [ 'admins' => Admin::listAll()];
	$files = [ 'cabecalho-dois', 'barra-navegacao', 'administradores', 'rodape-dois'];
	$pageAdmin->drawPage( $files, $admins);
});

$app->get( '/admin/administradores/cadastrar-administrador', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-tres', 'barra-navegacao', 'cadastrar-administrador', 'rodape-tres'];
	$pageAdmin->drawPage( $files);
});

$app->post( '/admin/administradores/cadastrar-administrador', function ()
{
	$admin = new Admin();
	$response = $admin->save($_POST);
	header("Location: /eventos-master/admin/administradores?".$response);
	exit;
});

$app->get( '/admin/administradores/atualizar-administrador/:idadmin', function ($idadmin)
{
	$admin = new Admin();
	$admin->get((int)$idadmin);
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-quatro', 'barra-navegacao', 'atualizar-administrador', 'rodape-quatro'];
	$pageAdmin->drawPage( $files, array('admin' => $admin->getDatas()));
});

$app->post( '/admin/administradores/atualizar-administrador/:idadmin', function ($idadmin)
{
	$admin = new Admin();
	$admin->get((int)$idadmin);
	echo json_encode($admin->getDatas());
	$admin->setData();
	echo json_encode($admin->getDatas());
	// $response = $admin->update($_POST);
	// header("Location: /eventos-master/admin/administradores?".$response);
	// exit;

	// PAREI AQUI HUUHUHUHUH
});												


$app->run();