<?php

	namespace Eventos;

	class Model {

		private $values = [];

		public function __call( $nameFunction, $argsFunction)
		{
			$methodType = substr( $nameFunction, 0, 3);
			$fieldName = substr( $nameFunction, 3, strlen($nameFunction));

			switch ($methodType) {
				case 'get':
					return isset($this->values[$fieldName]) ? $this->values[$fieldName] : 'n';
					break;
				
				case 'set':
					$this->values[$fieldName] = $argsFunction[0];
					break;
			}
		}

		public function setData($data = array())
		{
			foreach ($data as $key => $value) {
				$this->{"set".$key}($value);
			}
		}

		public function getDatas()
		{
			return $this->values;
		}

	}