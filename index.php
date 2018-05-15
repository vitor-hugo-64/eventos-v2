<?php

require 'vendor/autoload.php';

use \Slim\Slim;
use Eventos\PageAdmin;

$app = new Slim();

$app->get( '/admin', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho-index', 'barra-navegacao', 'index', 'rodape-admin', 'rodape-index'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/cadastrar-endereco', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'cadastrar-endereco', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/lista-enderecos', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'lista-enderecos', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});	

$app->get( '/admin/endereco', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'endereco', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});	

$app->get( '/admin/atualizar-endereco', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'atualizar-endereco', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/criar-evento', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'criar-evento', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/lista-eventos', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'lista-eventos', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/evento', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'evento', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/atualizar-evento', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'atualizar-evento', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/atualizar-certificado', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'atualizar-certificado', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/liberar-certificado', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'liberar-certificado', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/participante', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'participante', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/cadastrar-administrador', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'cadastrar-administrador', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/lista-administradores', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'lista-administradores', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/administrador', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'administrador', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});

$app->get( '/admin/atualizar-administrador', function ()
{
	$pageAdmin = new PageAdmin();
	$files = [ 'cabecalho', 'barra-navegacao', 'atualizar-administrador', 'rodape-admin', 'rodape'];
	$pageAdmin->drawPage( $files);
});											


$app->run();