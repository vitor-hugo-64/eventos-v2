<?php

namespace Eventos\DB;

use PDO;

class Sql extends PDO
{
	const HOSTNAME = "172.16.0.5";
	const USERNAME = "site";
	const PASSWORD = "ChWoaTBxTZEzVSHX";
	const DBNAME = "eventos";
	private $con;		
	
	function __construct()
	{
		$this->con = new PDO("mysql:dbname=".Sql::DBNAME."; host=".Sql::HOSTNAME, Sql::USERNAME, Sql::PASSWORD,
			array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
				PDO::ATTR_PERSISTENT => false,
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			)
		);
	}

	private function bindParams($statement, $key, $value)
	{
		$statement->bindParam($key, $value);
	}

	private function setParams($statement, $parameters = array())
	{
		foreach ($parameters as $key => $value) {
			$this->bindParams($statement, $key, $value);
		}
	}		

	public function query( $rowQuery, $params = array('' => ''))
	{
		$stmt = $this->con->prepare($rowQuery);
		$this->setParams( $stmt, $params);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function select( $rowQuery, $params = array('' => ''))
	{
		$stmt = $this->con->prepare($rowQuery);
		$this->setParams( $stmt, $params);
		if ($stmt->execute()){ return $stmt->fetchAll(PDO::FETCH_ASSOC); } else { return 0; }
	}
}