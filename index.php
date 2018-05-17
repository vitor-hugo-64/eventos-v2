<?php

require 'vendor/autoload.php';

use \Slim\Slim;
use \Eventos\PageAdmin;
use \Eventos\Model\Admin;
use \Eventos\Model\Address;

$app = new Slim();

$app->get( '/admin', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-um', 'barra-navegacao', 'index', 'rodape-um'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/enderecos', function ()
{
	$address = [ 'address' => Address::listAll()];
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-dois', 'barra-navegacao', 'enderecos', 'rodape-dois'];
	$pageAdmin->drawPage( $files, $address);
});

$app->get( '/admin/enderecos/cadastrar-endereco', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-tres', 'barra-navegacao', 'cadastrar-endereco', 'rodape-tres'];
	$pageAdmin->drawPage( $files);
});

$app->post( '/admin/enderecos/cadastrar-endereco', function ()
{
	$address = new Address();
	$response = $address->save($_POST);
	header('Location: /eventos-master/admin/enderecos');
	exit;
});

$app->get( '/admin/enderecos/atualizar-endereco/:idaddress', function ($idaddress)
{
	$address = new Address();
	$address->get((int)$idaddress);
	$adr = [ 'address' => $address->getDatas()];
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-quatro', 'barra-navegacao', 'atualizar-endereco', 'rodape-quatro'];
	$pageAdmin->drawPage( $files, $adr);
});

$app->post( '/admin/enderecos/atualizar-endereco/:idaddress', function ($idaddress)
{
	$address = new Address();
	$address->setData($_POST);
	$address->update($idaddress);
	header('Location: /eventos-master/admin/enderecos');
	exit;
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
	$pageAdmin->drawPage( $files, array( 'admin' => $admin->getDatas()));
});

$app->post( '/admin/administradores/atualizar-administrador/:idadmin', function ($idadmin)
{
	$admin = new Admin();
	$admin->setData($_POST);
	$response = $admin->update($idadmin);
	header("Location: /eventos-master/admin/administradores");
	exit;
});

$app->run();