<?php

namespace Eventos\Model;

use \Eventos\Model;
use \Eventos\DB\Sql;

class User extends Model
{
	
	const SESSION = 'User';

	public static function login( $email, $senha)
	{
		$sql = new Sql();
		$results = $sql->select("SELECT * from c_administrador WHERE email = :email", array( ':email' => $email));

		if (count($results) === 0) {
			echo "Sem Resultado!";
		}

		$datas = $results[0];

		if (crypt($senha, 'ead') == $datas['senha']) {
			
			$user = new User();
			$user->setData($datas);
			$_SESSION[USER::SESSION] = $user->getDatas();

		} else {
			echo "Sem Resultado";
		}

	}

}