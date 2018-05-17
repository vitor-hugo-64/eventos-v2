<?php

namespace Eventos\Model;

use \Eventos\DB\Sql;
use \Eventos\Model;

class Admin extends Model
{
	private $sql;

	function __construct()
	{
		$this->sql = new Sql();
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
				':senha' => sha1($this->getsenha()),
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


}