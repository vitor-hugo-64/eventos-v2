<?php

namespace Eventos\Model;

use \Eventos\DB\Sql;
use \Eventos\Model;

class Admin extends Model
{
	const SESSION = 'Admin';
	private $sql;

	function __construct()
	{
		$this->sql = new Sql();
	}

	public static function login( $email, $senha)
	{
		$sql = new Sql();
		$results = $sql->select("SELECT * from c_administrador WHERE email = :email", 
			array(
				':email' => $email
			)
		);

		if (count($results) === 0) {
			header('Location: /eventos-master/');
			exit;
		}

		$datas = $results[0];

		if (crypt($senha, 'ead') == $datas['senha']) {
			
			$admin = new Admin();
			$admin->setData($datas);
			$_SESSION[Admin::SESSION] = $admin->getDatas();
			echo json_encode($_SESSION[Admin::SESSION]);
			if ($_SESSION[Admin::SESSION]['trocar_senha'] === 'n') {
				return '/admin';
			} else {
				return '/trocar-senha?0';
			}

		} else {
			return '/?1';
		}

	}

	public static function logout()
	{
		$_SESSION[Admin::SESSION] = NULL;
	}

	public static function verifyLogin()
	{
		if (!isset($_SESSION[Admin::SESSION]) || !$_SESSION[Admin::SESSION] || $_SESSION[Admin::SESSION]['cod_administrador'] < 0) {
			header('Location: /eventos-master/');
			exit;
		} else {
			if ($_SESSION[Admin::SESSION]['conta_ativa'] === 'n') {
				header('Location: /eventos-master/');
				exit;
			}
		}
	}

	public static function verifyPassword()
	{
		if ($_SESSION[Admin::SESSION]['trocar_senha'] === 'n') {
			header('Location: /eventos-master/admin');
			exit;
		}
	}	

	public function get($iduser)
	{
		$selectRow = "SELECT * FROM c_administrador WHERE cod_administrador = :iduser";
		$id = [ ':iduser' => $iduser];
		$result = $this->sql->select( $selectRow, $id);
		$this->setData($result[0]);
	}

	public static function listAll()
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM c_administrador");
	}

	public function save($datas = array())
	{
		$this->setData($datas);
		$insertRow = "SELECT CADASTRAR_ADMINISTRADOR( :nome, :email, :senha, :super_admin, :trocar_senha) AS CA FROM DUAL";
		$response = $this->sql->query( $insertRow,
			array(
				':nome' => $this->getnome(),
				':email' => $this->getemail(),
				':senha' => crypt($this->getsenha(), 'ead'),
				':super_admin' => $this->getsuper_admin(),
				':trocar_senha' => $this->gettrocar_senha()
			)
		);
		return ($response[0]['CA']);
	}

	public function update($idadmin)
	{
		$updateRow = "SELECT ATUALIZAR_ADMINISTRADOR( :cod_administrador, :nome, :email, :super_admin, :trocar_senha, :conta_ativa) AS CA FROM DUAL";
		
		$response = $this->sql->query( $updateRow,
			array(
				':cod_administrador' => $idadmin,
				':nome' => $this->getnome(),
				':email' => $this->getemail(),
				':super_admin' => $this->getsuper_admin(),
				':trocar_senha' => $this->gettrocar_senha(),
				':conta_ativa' => $this->getconta_ativa()
			)
		);
		return ($response[0]['CA']);
	}

	public static function alterPassword( $datas = array(), $idadmin, $email)
	{
		$sql = new Sql();
		$updateRow = "SELECT ALTERAR_SENHA( :senha_nova, :idadmin) AS US FROM dual";

		$response = $sql->select( $updateRow, 
			array(
				':senha_nova' => crypt($datas['senha'], 'ead'),
				':idadmin' => $idadmin
			)
		);

		$results = $sql->select("SELECT * from c_administrador WHERE email = :email", 
			array(
				':email' => $email
			)
		);

		$admin = new Admin();
		$admin->setData($results[0]);
		$_SESSION[Admin::SESSION] = $admin->getDatas();

		return ($response[0]['US']);
	}

}