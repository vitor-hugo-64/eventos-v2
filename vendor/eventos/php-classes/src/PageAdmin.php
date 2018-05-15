<?php
	namespace Eventos;
	use Rain\Tpl;
	class PageAdmin
	{
		private $tpl;
		
		function __construct()
		{
			$config = array( 'tpl_dir' => 'views/admin'.DIRECTORY_SEPARATOR, 'cache_dir' => 'views-cache'.DIRECTORY_SEPARATOR );
			Tpl::configure( $config );
			$this->tpl = new Tpl();

		}
		public function drawPage($files = array(null), $params = array(null))
		{
			foreach ($params as $key => $value) {
				$this->tpl->assign( $key, $value);
			}
			foreach ($files as $value) {
				$this->tpl->draw($value);
			}
		}
	}