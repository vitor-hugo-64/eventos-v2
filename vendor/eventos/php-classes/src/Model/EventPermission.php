<?php

namespace Eventos\Model;

use \Eventos\DB\Sql;
use \Eventos\Model;

class EventPermission extends Model
{
	private $sql;

	function __construct()
	{
		$this->sql = new sql();
	}

	public static function listAll()
	{
		$sql = new Sql();
		$selectRow = "SELECT ac.cod_acesso, a.nome, e.descricao_evento from c_acessos_administrador_evento as ac inner join c_administrador as a on a.cod_administrador = ac.cod_administrador inner join c_evento as e on e.cod_evento = ac.cod_evento";
		$result = $sql->select($selectRow);
		return $result;
	}

	public function createEventPermission()
	{
		$insertRow = "INSERT INTO c_acessos_administrador_evento VALUES( DEFAULT, :cod_administrador, :cod_evento)";
		$response = $this->sql->query( $insertRow,
			array(
				':cod_administrador' => (int)$this->getcod_administrador(),
				':cod_evento' => (int)$this->getcod_evento()
			)
		);

		if ($response) {
			return 1;
		} else {
			return 2;
		}
	}

	public function deleteEventPermission($idaccess)
	{
		$deleteRow = "DELETE FROM c_acessos_administrador_evento WHERE cod_acesso = :cod_acesso";
		$this->sql->query( $deleteRow, 
			array(
				':cod_acesso' => $idaccess
			)
		);

		return 1;
	}		
}