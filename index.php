<?php

session_start();

require 'vendor/autoload.php';

use \Slim\Slim;
use \Eventos\Page;
use \Eventos\Model\User;
use \Eventos\PageAdmin;
use \Eventos\Model\Admin;
use \Eventos\Model\Address;
use \Eventos\Model\Event;

$app = new Slim();

$app->get( '/', function ()
{
	$page = new Page();
	$files = array( 'cabecalho', 'login-admin', 'rodape');
	$page->drawPage( $files);
});

$app->post( '/', function ()
{
	Admin::login( $_POST['email'], $_POST['senha']);
	header('Location: /eventos-master/admin');
	exit;
});

$app->get( '/admin/logout', function ()
{
	Admin::logout();
	header('Location: /eventos-master/');
	exit;
});

$app->get( '/admin', function ()
{
	Admin::verifyLogin();
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

$app->get( '/admin/eventos', function ()
{
	$datas = array( 'events' => Event::listAll());
	$pageAdmin = new PageAdmin();
	$files = array( 'cabecalho-dois', 'barra-navegacao', 'eventos', 'rodape-dois');
	$pageAdmin->drawPage($files, $datas);
});

$app->get( '/admin/eventos/criar-evento', function ()
{
	$address = array( 'address' => Address::listAll());	
	$pageAdmin = new pageAdmin();
	$files = array( 'cabecalho-tres', 'barra-navegacao', 'criar-evento', 'rodape-tres');
	$pageAdmin->drawPage( $files, $address);
});

$app->post( '/admin/eventos/criar-evento', function ()
{
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$event = new Event();
	$event->save($_POST);
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