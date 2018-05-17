<?php

namespace Eventos\Model;

use \Eventos\DB\Sql;
use \Eventos\Model;

class Address extends Model
{
	private $sql;

	function __construct()
	{
		$this->sql = new Sql();
	}

	public static function listAll()
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM c_endereco");
	}

	public function get($idaddress)
	{
		$selectRow = "SELECT * FROM c_endereco WHERE cod_endereco = :cod_endereco";
		$datas = $this->sql->select($selectRow,
			array(
				':cod_endereco' => $idaddress
			)
		);
		$this->setData($datas[0]);
	}

	public function save($datas = array())
	{
		$this->setData($datas);
		$insertRow = "SELECT CADASTRAR_ENDERECO( :descricao, :numero, :rua, :bairro, :cidade, :estado, :pais) as CE FROM dual";
		$response = $this->sql->query( $insertRow, 
			array(
				':descricao' => $this->getdescricao(), 
				':numero' => $this->getnumero(),
				':rua' => $this->getrua(),
				':bairro' => $this->getbairro(),
				':cidade' => $this->getcidade(),
				':estado' => $this->getestado(),
				':pais' => $this->getpais()
			)
		);
		return ($response[0]['CE']);
	}

	public function update($idaddress)
	{
		$updateRow = "SELECT ATUALIZAR_ENDERECO( :cod_endereco, :descricao, :numero, :rua, :bairro, :cidade, :estado, :pais) AS AE FROM DUAL";

		$response = $this->sql->query( $updateRow,
			array(
				':cod_endereco' => $idaddress,
				':descricao' => $this->getdescricao(),
				':numero' => $this->getnumero(),
				':rua' => $this->getrua(),
				':bairro' => $this->getbairro(),
				':cidade' => $this->getcidade(),
				':estado' => $this->getpais(),
				':pais' => $this->getpais()
			)
		);

		return ($response[0]['AE']);
	}


}