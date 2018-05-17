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

		public static function listAll()
		{
			$sql = new Sql();
			return $sql->select("SELECT * FROM c_administrador");
		}

		public function save($datas = array())
		{
			$this->setData($datas);
			$insertRow = "INSERT INTO c_administrador VALUES( DEFAULT, :nome, :email, :senha, now(), :super_admin, :alterar_senha, DEFAULT)";
			return $this->sql->query( $insertRow,
				array(
					':nome' => $this->getnome(),
					':email' => $this->getemail(),
					':senha' => sha1($this->getsenha()),
					':super_admin' => $this->getsuper_admin(),
					':alterar_senha' => $this->getalterar_senha()
				)
			);
		}

		public function get($iduser)
		{
			$selectRow = "SELECT * FROM c_administrador WHERE cod_administrador = :iduser";
			$id = [ ':iduser' => $iduser];
			$result = $this->sql->select( $selectRow, $id);
			$this->setData($result[0]);
		}

		public function update($datas = array())
		{
			$this->setData($datas);
			$updateRow = "UPDATE c_administrador SET nome = :nome, email = :email, super_admin = :super_admin, trocar_senha = :trocar_senha, conta_ativa = :conta_ativa WHERE cod_administrador = :cod_administrador";
			return $this->sql->query( $updateRow,
				array(
					':cod_administrador' => $this->getcod_administrador(),
					':nome' => $this->getnome(),
					':email' => $this->getemail(),
					':super_admin' => $this->getsuper_admin(),
					':trocar_senha' => $this->gettrocar_senha(),
					':conta_ativa' => $this->getconta_ativa()
				)
			);
		}


	}