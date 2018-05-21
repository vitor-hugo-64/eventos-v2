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
use \Eventos\Model\EventPermission;

$app = new Slim();

$app->get( '/', function ()
{
	$page = new Page();
	$files = array( 'cabecalho', 'login-admin', 'rodape');
	$page->drawPage( $files);
});

$app->post( '/', function ()
{
	$response = Admin::login( $_POST['email'], $_POST['senha']);
	header('Location: /eventos-master'.$response);
	exit;
});

$app->get( '/trocar-senha', function ()
{
	Admin::verifyLogin();
	Admin::verifyPassword();
	$datas = array('admin' => $_SESSION['Admin']);
	$page = new Page();
	$files = array('cabecalho', 'trocar-senha', 'rodape');
	$page->drawPage( $files, $datas);
});
$app->post( '/trocar-senha', function ()
{
	$response = Admin::alterPassword( $_POST, $_SESSION['Admin']['cod_administrador'], $_SESSION['Admin']['email']);
	header('Location: /eventos-master/admin?'.$response);
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
	$admin = array( 'admin' => $_SESSION['Admin']);
	$pageAdmin->drawPage( $files, $admin);
});

$app->get( '/admin/enderecos', function ()
{
	Admin::verifyLogin();
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-dois', 'barra-navegacao', 'enderecos', 'rodape-dois'];
	$datas = array( 'address' => Address::listAll(), 'admin' => $_SESSION['Admin']);
	$pageAdmin->drawPage( $files, $datas);
});

$app->get( '/admin/enderecos/cadastrar-endereco', function ()
{
	Admin::verifyLogin();
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-tres', 'barra-navegacao', 'cadastrar-endereco', 'rodape-tres'];
	$admin = array( 'admin' => $_SESSION['Admin']);
	$pageAdmin->drawPage( $files, $admin);
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
	Admin::verifyLogin();
	$address = new Address();
	$address->get((int)$idaddress);
	$datas = [ 'address' => $address->getDatas(),  'admin' => $_SESSION['Admin']];
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-quatro', 'barra-navegacao', 'atualizar-endereco', 'rodape-quatro'];
	$pageAdmin->drawPage( $files, $datas);
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
	Admin::verifyLogin();
	$datas = array( 'events' => Event::listAll(), 'admin' => $_SESSION['Admin']);
	$pageAdmin = new PageAdmin();
	$files = array( 'cabecalho-dois', 'barra-navegacao', 'eventos', 'rodape-dois');
	$pageAdmin->drawPage($files, $datas);
});

$app->get( '/admin/eventos/criar-evento', function ()
{
	Admin::verifyLogin();
	$datas = array( 'address' => Address::listAll(), 'admin' => $_SESSION['Admin']);	
	$pageAdmin = new pageAdmin();
	$files = array( 'cabecalho-tres', 'barra-navegacao', 'criar-evento', 'rodape-tres');
	$pageAdmin->drawPage( $files, $datas);
});

$app->post( '/admin/eventos/criar-evento', function ()
{
	$event = new Event();
	$response = $event->save( $_POST, $_SESSION['Admin']['cod_administrador']);
	header('Location: /eventos-master/admin/eventos');
	exit;
});

$app->get( '/admin/eventos/atualizar-evento/:idevento', function ($idevento)
{
	Admin::verifyLogin();
	$event = new Event();
	$event->get((int)$idevento);
	$datas = array( 'admin' => $_SESSION['Admin'], 'event' => $event->getDatas(), 'address' => Address::listAll());
	$pageAdmin = new pageAdmin();
	$files = array( 'cabecalho-quatro', 'barra-navegacao', 'atualizar-evento', 'rodape-quatro');
	$pageAdmin->drawPage( $files, $datas);
});

$app->post( '/admin/eventos/atualizar-evento/:idevento/:inscricoesabertas', function ( $idevento, $inscricoesabertas)
{
	$event = new Event();
	$event->setdescricao_evento($_POST['descricao_evento']);
	$event->setdata_realizacao($_POST['data_realizacao']." ".$_POST['hora']);
	$event->setcod_endereco($_POST['cod_endereco']);
	$event->setinicio_certificado($_POST['inicio_certificado']);
	$event->setcod_administrador($_SESSION['Admin']['cod_administrador']);
	$event->setcorpo_certificado($_POST['corpo_certificado']);
	$event->setinscricoes_abertas($inscricoesabertas);
	$event->update($idevento);
	header('Location: /eventos-master/admin/eventos');
	exit;
});

$app->get( '/admin/administradores', function ()
{
	Admin::verifyLogin();
	$pageAdmin = new PageAdmin();
	$datas = [ 'admins' => Admin::listAll(), 'admin' => $_SESSION['Admin']];
	$files = [ 'cabecalho-dois', 'barra-navegacao', 'administradores', 'rodape-dois'];
	$pageAdmin->drawPage( $files, $datas);
});

$app->get( '/admin/administradores/cadastrar-administrador', function ()
{
	Admin::verifyLogin();
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-tres', 'barra-navegacao', 'cadastrar-administrador', 'rodape-tres'];
	$admin = array( 'admin' => $_SESSION['Admin']);
	$pageAdmin->drawPage( $files, $admin);
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
	Admin::verifyLogin();
	$admin = new Admin();
	$admin->get((int)$idadmin);
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-quatro', 'barra-navegacao', 'atualizar-administrador', 'rodape-quatro'];
	$pageAdmin->drawPage( $files, array( 'admins' => $admin->getDatas(), 'admin' => $_SESSION['Admin']));
});

$app->post( '/admin/administradores/atualizar-administrador/:idadmin', function ($idadmin)
{
	$admin = new Admin();
	$admin->setData($_POST);
	$response = $admin->update($idadmin);
	header("Location: /eventos-master/admin/administradores");
	exit;
});

$app->get( '/admin/event-permissions', function ()
{
	Admin::verifyLogin();
	$datas = [ 'admin' => $_SESSION['Admin'], 'permissions' => EventPermission::listAll()];
	$pageAdmin = new PageAdmin();
	$files = array( 'cabecalho-dois', 'barra-navegacao', 'event-permissions', 'rodape-dois');
	$pageAdmin->drawPage( $files, $datas);
});

$app->get( '/admin/event-permissions/create-event-permission', function ()
{
	Admin::verifyLogin();
	$pageAdmin = new PageAdmin();
	$datas = array( 'admin' => $_SESSION['Admin'], 'events' => Event::listAll(), 'admins' => Admin::listAll());
	$files = array( 'cabecalho-tres', 'barra-navegacao', 'create-event-permission', 'rodape-tres');
	$pageAdmin->drawPage( $files, $datas);
});

$app->post( '/admin/event-permissions/create-event-permission', function ()
{
	$eventP = new EventPermission();
	$eventP->setData($_POST);
	$eventP->createEventPermission();
	header('Location: /eventos-master/admin/event-permissions');
	exit;
});

$app->get( '/admin/event-permissions/delete-event-permission/:idaccess', function ($idaccess)
{
	$eventP = new EventPermission();
	$eventP->deleteEventPermission($idaccess);
	header('Location: /eventos-master/admin/event-permissions');
	exit;
});

$app->run();