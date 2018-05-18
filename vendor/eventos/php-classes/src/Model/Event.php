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

	public static function listAll()
	{
		$sql = new Sql();
		return $sql->select("SELECT e.cod_evento, e.descricao_evento, e.data_realizacao, e.cod_endereco, a.descricao, e.inscricoes_abertas, e.cod_administrador, r.nome FROM c_evento e INNER JOIN c_endereco a ON e.cod_endereco = a.cod_endereco INNER JOIN c_administrador r ON r.cod_administrador = e.cod_administrador");
	}

	public function save($datas = array())
	{
		$this->setData($datas);
	}
}