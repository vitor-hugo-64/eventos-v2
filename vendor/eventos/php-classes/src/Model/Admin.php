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

		public function save($datas = array())
		{
			$this->setData($datas);
			$insertRow = "INSERT INTO c_administrador VALUES( DEFAULT, :nome, :email, :senha, now(), :super_admin, :alterar_senha, DEFAULT)";
			return $this->sql->query( $insertRow,
				array(
					':nome' => $this->getnome(),
					':email' => $this->getemail(),
					':senha' => $this->getsenha(),
					':super_admin' => $this->getsuper_admin(),
					':alterar_senha' => $this->getalterar_senha()
				)
			);
		}


	}