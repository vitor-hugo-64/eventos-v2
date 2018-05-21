<?php

namespace Eventos\Model;

use \Eventos\DB\Sql;
use \Eventos\Model;

class Event extends Model
{
	private $sql;

	function __construct()
	{
		$this->sql = new Sql();			
	}

	public function get($idevento)
	{
		$selectRow = "SELECT * FROM c_evento WHERE cod_evento = :idevento";
		$response = $this->sql->select( $selectRow, array( ':idevento' => $idevento));
		$response[0]['hora'] = substr( $response[0]['data_realizacao'], 11);
		$response[0]['data_realizacao'] = substr( $response[0]['data_realizacao'], 0, -9);
		$this->setData($response[0]);
	}

	public static function listAll()
	{
		$sql = new Sql();
		return $sql->select("SELECT e.cod_evento, e.descricao_evento, e.data_realizacao, e.cod_endereco, a.descricao, e.inscricoes_abertas, e.cod_administrador, r.nome FROM c_evento e INNER JOIN c_endereco a ON e.cod_endereco = a.cod_endereco INNER JOIN c_administrador r ON r.cod_administrador = e.cod_administrador");
	}

	public function save($datas = array(), $idadmin)
	{
		$this->setData($datas);
		$insertRow = "SELECT CRIAR_EVENTO( :descricao_evento, :data_realizacao, :cod_endereco, :cod_administrador, :inicio_certificado, :corpo_certificado) AS CE FROM dual";
		$response = $this->sql->query( $insertRow, 
			array(
				':descricao_evento' => $this->getdescricao_evento(),
				':data_realizacao' => $this->getdata_realizacao()." ".$this->gethora(),
				':cod_endereco' => $this-> getcod_endereco(),
				':cod_administrador' => $idadmin,
				':inicio_certificado' => $this->getinicio_certificado(),
				':corpo_certificado' => $this->getcorpo_certificado()
			)		
		);


		return ($response[0]['CE']);
	}

	public function update($idevento)
	{
		$updateRow = "SELECT ATUALIZAR_EVENTO( :cod_evento, :descricao_evento, :data_realizacao, :cod_endereco, :inscricoes_abertas, :cod_administrador, :inicio_certificado, :corpo_certificado) AS AE FROM dual";

		$response = $this->sql->query( $updateRow, 
			array(
				':cod_evento' => $idevento,
				':descricao_evento' => $this->getdescricao_evento(),
				':data_realizacao' => $this->getdata_realizacao(),
				':cod_endereco' => $this->getcod_endereco(),
				':inscricoes_abertas' => $this->getinscricoes_abertas(),
				':cod_administrador' => $this->getcod_administrador(),
				':inicio_certificado' => $this->getinicio_certificado(),
				':corpo_certificado' => $this->getcorpo_certificado()
			)
		);

		echo json_encode($response);
	}
}